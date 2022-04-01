<?php   

namespace App\Repositories\User;

use App\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\User\UserRepositoryInterface; 

class UserRepository extends BaseRepository implements UserRepositoryInterface 
{
  /**      
   * @var Model      
   */
  protected $model;       

  /**
   * UserRepository constructor.      
   *      
   * @param Model $model      
   */
  public function __construct(User $model)     
  {         
    $this->model = $model;
  }
}