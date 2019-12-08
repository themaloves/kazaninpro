<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Card extends Model
{
    use AsSource;
    use Attachable;

    public $timestamps = false;

    protected $fillable = [
        'object', 'title', 'description', 'address',
    ];

    public function getTitleAttribute(?string $value): array
    {
        if ((string) $value === '') {
            return ['ru' => null, 'en' => null];
        }

        return json_decode($value, true);
    }

    public function setTitleAttribute(array $value): void
    {
        $this->attributes['title'] = json_encode($value);
    }

    public function getDescriptionAttribute(?string $value): array
    {
        if ((string) $value === '') {
            return ['ru' => null, 'en' => null];
        }

        return json_decode($value, true);
    }

    public function setDescriptionAttribute(array $value): void
    {
        $this->attributes['description'] = json_encode($value);
    }

    public function getAddressAttribute(?string $value): array
    {
        if ((string) $value === '') {
            return ['ru' => null, 'en' => null];
        }

        return json_decode($value, true);
    }

    public function setAddressAttribute(array $value): void
    {
        $this->attributes['address'] = json_encode($value);
    }
}
