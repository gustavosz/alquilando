<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\CreateUserRequest;
use App\Http\Requests\API\Users\UpdateUserRequest;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Repositories\API\UserRepository;
use Illuminate\Http\JsonResponse;


class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(): JsonResponse
    {
        $users = $this->userRepository->findAll();

        return response()->json(new UserCollection($users));
    }

    public function show(User $user): JsonResponse
    {
        return response()->json([new UserResource($user)]);
    }

    public function store(CreateUserRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userRepository->create($data);

        return response()->json([new UserResource($user)], 201);
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $data = $request->validated();

        $user = $this->userRepository->update($user, $data);

        return response()->json([new UserResource($user)]);
    }

    public function destroy(User $user)
    {
        $this->userRepository->delete($user);

        return response()->json(null, 204);
    }
}
