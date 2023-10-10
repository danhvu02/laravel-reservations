<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use App\Enums\Role;
use Illuminate\Auth\Access\Response;

class CompanyUserPolicy
{

    public function before(User $user): bool|null
    {
        if ($user->role_id === Role::Administrator) {
            return true;
        }

        return null;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Company $company): bool
    {
        return $user->role_id === Role::CompanyOwner && $user->company_id === $company->id;
    }

    public function create(User $user, Company $company): bool
    {
        return $user->role_id === Role::CompanyOwner && $user->company_id === $company->id;
    }

    public function update(User $user, Company $company): bool
    {
        return $user->role_id === Role::CompanyOwner && $user->company_id === $company->id;
    }

    public function delete(User $user, Company $company): bool
    {
        return $user->role_id === Role::CompanyOwner && $user->company_id === $company->id;
    }
}
