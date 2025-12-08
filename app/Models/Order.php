<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'shipping_address',
        'city',
        'postal_code',
        'payment_method',
        'subtotal',
        'shipping_cost',
        'total',
        'status',
        'notes'
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'shipping_cost' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    // Relationship: Order belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: Order has many OrderItems
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Generate unique order number
    public static function generateOrderNumber()
    {
        return 'ORD-' . strtoupper(uniqid());
    }
}
