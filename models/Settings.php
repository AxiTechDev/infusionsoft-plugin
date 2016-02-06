<?php namespace One47\InfusionsoftAPI\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'one47_infusionsoftapi_settings';

    public $settingsFields = 'fields.yaml';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'one47_infusionsoftapi_settings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Validation rules
     */
    public $rules = [
        'client_id'   => 'required',
        'client_secret'   => 'required',
        'redirect_uri'  => 'required'
    ];
}
