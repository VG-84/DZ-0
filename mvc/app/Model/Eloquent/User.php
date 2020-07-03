<?php
namespace App\Model\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Model\Eloquent
 *
 * @property-read $id
 * @property-read  $name
 * @property-read $password
 * @property-read $email
 */
class User extends Model
{
/**
* The table associated with the model.
*
* @var string
*/
protected $table = 'users';
public $timestamps = false;
protected $fillable =
    [
        'name',
        'created_at',
        'password',
        'email',
    ];


public static function getByEmail(string $email)
    {
        return self::where('email', '=', $email)->first();
    }
    public static function getById(int $id): ?self
    {
        return self::find($id);
    }
    public static function getPasswordHash(string $password)
    {
        return sha1('.,f.akjsduf' . $password);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function isAdmin(): bool
    {
        return in_array($this->id, ADMIN_IDS);
    }
}