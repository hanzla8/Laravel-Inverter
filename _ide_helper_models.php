<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AddProduct
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property string|null $description
 * @property string|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AddProduct whereUpdatedAt($value)
 */
	class AddProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppointmentTable
 *
 * @property int $id
 * @property string $name
 * @property string $tel
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTable whereUpdatedAt($value)
 */
	class AppointmentTable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactPage
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPage query()
 */
	class ContactPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $user_type
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 */
	class User extends \Eloquent {}
}

