<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/14/2019
 * Time: 10:20 AM
 */

namespace App\Repository\User;


use App\Model\User;
use App\Repository\BaseRepository;
use App\Repository\RepositoryInterface;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function getListData($status = null, $paginate = false)
    {
        $query = User::whereNull('deleted_at')->whereNotNull(['phone', 'email'])->with('roles');
        if (!is_null($status)) {
            $query = $query->where('status', $status);
        }
        if (($paginate)) {
            $query = $query->paginate(config('app.paginate'));
        } else {
            $query = $query->get();
        }
        return $query;
    }

    public function getDataValidate($name = null, $email = null, $phone = null, $id = null)
    {
        $query = User::whereNull('deleted_at');
        if (!is_null($name)) {
            $query = $query->where('name', $name);
        }
        if (!is_null($email)) {
            $query = $query->where('email', $email);
        }
        if (!is_null($phone)) {
            $query = $query->where('phone', $phone);
        }
        if (!is_null($id)) {
            $query = $query->where('id','<>', $id);
        }
        $query = $query->first();
        return $query;
    }
}
