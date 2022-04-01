<?php   

namespace App\Services\User;

use App\User;
use Illuminate\Support\Collection;
use App\Repositories\User\UserRepositoryInterface; 

class UserService
{
  /**      
   * @var Model      
   */
  protected $userRepository;       

  /**
   * UserRepository constructor.      
   *      
   * @param Model $model      
   */
  public function __construct(UserRepositoryInterface $userRepository)     
  {         
    $this->userRepository = $userRepository;
  }

  /**
   * @return Collection
   */
  public function getAll(): Collection
  {
    return $this->userRepository->all();
  }

  /**
   * @return User
   */
  public function updateById(int $id, array $attributes): bool
  {
    return $this->userRepository->update($id, $attributes);
  }

  /**
   * @return User
   */
  public function findById(int $id): ?User
  {
    return $this->userRepository->find($id);
  }

  /**
   * @return Collection
   */
  public function deleteById(int $id): bool
  {
    return $this->userRepository->delete($id);
  }

  /**
   * @return Collection
   */
  public function createUser(array $attributes): User
  {
    return $this->userRepository->create($attributes);
  }
}