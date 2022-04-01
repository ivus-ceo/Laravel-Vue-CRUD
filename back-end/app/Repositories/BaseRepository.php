<?php   

namespace App\Repositories;   

use Illuminate\Support\Collection;
use App\Repositories\BaseRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;   

class BaseRepository implements BaseRepositoryInterface 
{     
  /**      
   * @var Model      
   */     
  protected $model;       

  /**      
   * BaseRepository constructor.      
   *      
   * @param Model $model      
   */     
  public function __construct(Model $model)     
  {         
    $this->model = $model;
  }

  /**
   * @return Collection
   */
  public function all(): Collection
  {
    return $this->model->all();
  }

  /**
   * @param $id
   * @return bool
   */
  public function update(int $id, array $attributes): bool
  {
    return $this->model->where('id', $id)->update($attributes);
  }

  /**
    * @param $id
    * @return bool
    */
  public function delete(int $id): bool
  {
    return $this->model->where('id', $id)->delete($id);
  }

  /**
  * @param array $attributes
  *
  * @return Model
  */
  public function create(array $attributes): Model
  {
    return $this->model->create($attributes);
  }

  /**
  * @param $id
  * @return Model
  */
  public function find(int $id): ?Model
  {
    return $this->model->find($id);
  }
}