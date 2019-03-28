<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomodoWallet extends Model
{
    
    use WalletSecurityLayer;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get wallet addresses
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany('App\Models\KomodoAddress', 'wallet_id', 'id');
    }

    /**
     * Get wallet transactions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\KomodoTransaction', 'wallet_id', 'id');
    }

    /**
     * Get user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}