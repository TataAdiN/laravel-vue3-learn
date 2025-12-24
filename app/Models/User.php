<?php

namespace App\Models;

use App\Traits\HasRolesTrait;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @mixin \Illuminate\Database\Query\Builder
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @property int $parent_id
 * @property string $id
 * @property string $name
 * @property string $password
 * @property int $is_active
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesTrait, CausesActivity, LogsActivity;

    /**
     * The primary key type is a string (UUID).
     *
     * @var string
     */
    protected $keyType = "string";

    /**
     * UUIDs are not auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "id",
        "name",
        "email",
        "username",
        "is_active",
        "password",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "password" => "hashed",
        ];
    }
}
