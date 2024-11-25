<?php

namespace App\Models\Backend\AdditionalFeatureManagement\StudentOpinion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOpinion extends Model
{
    use HasFactory;
//    use Searchable;

    protected $fillable = ['show_type', 'name', 'image', 'comment', 'status','video_link'];

//    protected $searchableFields = ['*'];

    protected $table = 'student_opinions';
    protected static $opinions;


    public static function updateOrCreateStudentOpinion($request, $id = null)
    {
        static::updateOrCreate(['id' => $id],[
            'show_type'              => $request->show_type,
            'name'                   => $request->name,
            'video_link'             => $request->video_link,
            'image'                  => fileUpload($request->file('image'),'student-opinion/opinions','', isset($id) ? static::find($id)->image : '' ),
            'comment'                => fileUpload($request->file('comment'),'student-opinion/opinions','', isset($id) ? static::find($id)->comment : '' ),
            'status'                 => $request->status == 'on' ? 1 : 0,
        ]);
    }

   /* public static function deleteStudentOpinion($id)
    {
        self::$opinions = StudentOpinion::find($id);
        if(file_exists(self::$opinions->image))
        {
            unlink(self::$opinions->image);
        }
        self::$opinions->delete();
    }*/

    public static function deleteStudentOpinion($id)
    {

        $opinion = StudentOpinion::find($id);
        if ($opinion && file_exists($opinion->image)) {
            unlink($opinion->image);
        }
        if ($opinion && file_exists($opinion->comment)) {
            unlink($opinion->comment);
        }
        if ($opinion) {
            $opinion->delete();
        }
    }
}
