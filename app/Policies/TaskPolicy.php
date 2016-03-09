<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Task;

class TaskPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Task $task)
    {
        return $user->id === $task->user_id;   
    }
}
