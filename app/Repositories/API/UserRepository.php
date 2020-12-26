<?php


namespace App\Repositories\API;


use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function findAll(): Collection
    {
        return User::all();
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(User $user, array $data): User
    {
        $user->update($data);

        return $user;
    }

    public function delete(User $user): void
    {
        $user->delete();
    }
}
