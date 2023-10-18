<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyPaymentMethod extends Model
{
    use HasFactory;

    protected $table = 'currency_payment_method';
}
