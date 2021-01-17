<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Banner extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'banners';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setImgAttribute($value)
    {
        $attributeName = "img";
        // or use your own disk, defined in config/filesystems.php
        $disk = config('backpack.base.root_disk_name');
        // destination path relative to the disk above
        $destinationPath = "public/uploads/images/banners";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::disk($disk)->delete($this->{$attributeName});

            // set null in the database column
            $this->attributes[$attributeName] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            // 0. Make the image
            $image = Image::make($value)->encode('jpg', 90);

            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

            // 2. Store the image on disk.
            Storage::disk($disk)->put($destinationPath.'/'.$filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            Storage::disk($disk)->delete($this->{$attributeName});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $publicDestinationPath = Str::replaceFirst('public/', '', $destinationPath);
            $this->attributes[$attributeName] = $filename;
        }
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            Storage::disk('public_folder')->delete($obj->image);
        });
    }
}
