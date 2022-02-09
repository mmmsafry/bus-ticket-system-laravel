<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    public $table = 'reservations';

    protected $fillable = [
        'user_id',
        'bus_id',
        'date',
        'station_id_from',
        'station_id_to',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'datetime',
        'user_id' => 'integer',
        'bus_id' => 'integer',
        'station_id_from' => 'integer',
        'station_id_to' => 'integer',
    ];

    /**
     * Section belongs to one department.
     *
     * @return BelongsTo
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    /**
     * Section belongs to one department.
     *
     * @return BelongsTo
     */
    public function stationFrom()
    {
        return $this->belongsTo(Station::class, 'station_id_from', 'id');
    }

    /**
     * Section belongs to one department.
     *
     * @return BelongsTo
     */
    public function stationTo()
    {
        return $this->belongsTo(Station::class, 'station_id_To', 'id');
    }

}
