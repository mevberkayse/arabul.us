<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Following;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'google_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isFavorited($listing_id)
    {
        return Favorite::where('user_id', $this->id)->where('listing_id', $listing_id)->exists();
    }

    public function isFollowing($user)
    {
        return Following::where('follower_id', $this->id)->where('following_id', $user->id)->exists();
    }

    public function follow($user)
    {
        return Following::create([
            'follower_id' => $this->id,
            'following_id' => $user->id
        ]);
    }

    public function unfollow($user)
    {
        return Following::where('follower_id', $this->id)->where('following_id', $user->id)->delete();
    }
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followings', 'following_id', 'follower_id');
    }

    public function followings(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'followings', 'follower_id', 'following_id');
    }
}
