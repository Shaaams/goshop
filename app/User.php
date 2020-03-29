<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'email_verified',
        'mobile', 'mobile_verified', 'password', 'shipping_address',
        'billing_address',


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //ToDo:Relation Between User Table And Others Tables in DataBase

    //ToDo:Relation Between User Table And Orders Table in DataBase
    public function orders(){
        return $this->hasMany(Order::class);
    }

    //ToDo:Relation Between User Table And Payments Table in DataBase
    public function payments(){
        return $this->hasMany(Payment::class);
    }

    //ToDo:Relation Between User Table And Shipments Table in DataBase
    public function shipments(){
        return $this->hasMany(Shipment::class);
    }

    //this user own One shippingAddress
    public function shippingAddress()
    {
        return $this->hasOne(Address::class, 'shipping_address', 'id');
    }

    //this user own One billingAddress
    public function billingAddress()
    {
        return $this->hasOne(Address::class, 'billing_address', 'id');
    }

    public function wishlist(){
        return $this->hasOne(Wishlist::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }



}
