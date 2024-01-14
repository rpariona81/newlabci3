<?php

use Db\BaseModel;
use \Illuminate\Database\Capsule\Manager as DB;

class UserEloquent extends BaseModel
{
    protected $table = 't_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document_type',
        'document_number',
        'career_id',
        'name',
        'paternal_surname',
        'maternal_surname',
        'gender',
        'birthdate',
        'mobile',
        'graduated',
        'address',
        'role_id',
        'username',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birthdate' => 'datetime:Y-m-d',
        'status' => 'boolean'
    ];

    protected $appends = ['flag'];

    public function getFlagAttribute()
    {
        //return date_diff(date_create($this->date_vigency), date_create('now'))->d;
        //https://blog.devgenius.io/how-to-find-the-number-of-days-between-two-dates-in-php-1404748b1e84
        //return date_diff(date_create('now'),date_create($this->date_vigency))->format('%R%a days');return date_diff(date_create('now'),date_create($this->date_vigency))->format('%R%a days');
        if ($this->status) {
            return 'Activo';
        } else {
            return 'Suspendido';
        }
    }

    public static function getUserBy($column, $value)
    {
        return UserEloquent::leftjoin('t_roles','t_users.role_id','=','t_roles.id')
        ->leftjoin('t_careers','t_users.career_id','=','t_careers.id')
        ->leftjoin('t_document_type', 't_users.document_type', '=', 't_document_type.id')
        ->select('t_users.id', 't_users.name', 't_users.password', 't_users.paternal_surname','t_users.maternal_surname', 't_users.document_type', 't_document_type.document_type_label', 't_users.document_number', 't_users.address', 't_users.mobile', 't_users.gender', 't_users.email', 't_users.birthdate', 't_users.status', 't_users.role_id', 't_roles.rolename', 't_users.career_id', 't_careers.career_title', 't_users.graduated', 't_users.username', 't_users.updated_at')
        ->where($column, '=', $value)->first();
        //return UserEloquent::where($column, '=', $value)->first();
    }

    public static function getUserEstudiantes()
    {
        /*$data = DB::select('SELECT t1.id, t1.name, t1.paternal_surname, t1.maternal_surname, t1.document_type, t4.document_type_label, t1.document_number, t1.address, t1.mobile, t1.gender, t1.email, t1.birthdate, t1.status, t1.role_id, t3.rolename, t1.career_id, t2.career_title, t1.graduated, t1.username, t1.updated_at FROM t_users t1 LEFT JOIN t_careers t2 ON t1.career_id=t2.id LEFT JOIN t_roles t3 ON t1.role_id=t3.id LEFT JOIN t_document_type t4 ON t1.document_type = t4.id WHERE t1.role_id=4 ORDER BY t1.updated_at DESC');
        return $data;*/

        return UserEloquent::leftjoin('t_careers', 't_users.career_id', '=', 't_careers.id')
            ->leftjoin('t_roles', 't_users.role_id', '=', 't_roles.id')
            ->leftjoin('t_document_type', 't_users.document_type', '=', 't_document_type.id')
            ->select('t_users.id', 't_users.name', 't_users.paternal_surname', 't_users.maternal_surname', 't_users.document_type', 't_document_type.document_type_label', 't_users.document_number', 't_users.address', 't_users.mobile', 't_users.gender', 't_users.email', 't_users.birthdate', 't_users.status', 't_users.role_id', 't_roles.rolename', 't_users.career_id', 't_careers.career_title', 't_users.graduated', 't_users.username', 't_users.updated_at')
            ->where('t_users.role_id', '=', '4')
            ->orderBy('t_users.updated_at', 'desc')
            ->get();
    }

    public static function getUserDocentes()
    {
        /*$data = DB::select('SELECT t1.id, t1.name, t1.paternal_surname, t1.maternal_surname, t1.document_type, t4.document_type_label, t1.document_number, t1.address, t1.mobile, t1.gender, t1.email, t1.birthdate, t1.status, t1.role_id, t3.rolename, t1.career_id, t2.career_title, t1.graduated, t1.username, t1.updated_at FROM t_users t1 LEFT JOIN t_careers t2 ON t1.career_id=t2.id LEFT JOIN t_roles t3 ON t1.role_id=t3.id LEFT JOIN t_document_type t4 ON t1.document_type = t4.id WHERE t1.role_id=3 ORDER BY t1.updated_at DESC');
        return $data;*/

        return UserEloquent::leftjoin('t_careers', 't_users.career_id', '=', 't_careers.id')
            ->leftjoin('t_roles', 't_users.role_id', '=', 't_roles.id')
            ->leftjoin('t_document_type', 't_users.document_type', '=', 't_document_type.id')
            ->select('t_users.id', 't_users.name', 't_users.paternal_surname', 't_users.maternal_surname', 't_users.document_type', 't_document_type.document_type_label', 't_users.document_number', 't_users.address', 't_users.mobile', 't_users.gender', 't_users.email', 't_users.birthdate', 't_users.status', 't_users.role_id', 't_roles.rolename', 't_users.career_id', 't_careers.career_title', 't_users.graduated', 't_users.username', 't_users.updated_at')
            ->where('t_users.role_id', '=', '3')
            ->orderBy('t_users.updated_at', 'desc')
            ->get();
    }
}