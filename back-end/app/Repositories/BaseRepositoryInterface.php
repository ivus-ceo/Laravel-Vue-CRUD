<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
   public function all(): Collection;
   public function update(int $id, array $attributes): bool;
   public function delete(int $id): bool;
   public function create(array $attributes): Model;
   public function find(int $id): ?Model;
}