<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getFolio($request) {
        $city = City::find($request['city_id']);
        $preFolio = "TICKET" . date("Ymd");
        $postFolio = Ticket::where('city_id', $city->id)->count() + 1;
        $postFolioPad = str_pad($postFolio, 3, "0", STR_PAD_LEFT);
        $folio = $preFolio . $postFolioPad;
        return $folio;
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function educationLevel() {
        return $this->belongsTo(EducationLevel::class, 'education_level_id', 'id');
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function responsable() {
        return $this->belongsTo(Responsable::class, 'responsable_id', 'id');
    }
}
