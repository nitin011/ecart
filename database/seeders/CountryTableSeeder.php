<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Country::query()->truncate();
        City::query()->truncate();
        foreach (config('countries') as $country) {
            Country::query()->create([
                'name' => ucfirst(strtolower($country['name'])),
                'code' => $country['code'],
                'alpha_2_code' => strtolower($country['alpha_2_code']),
                'status' => 'active',
            ]);
        }

        $uk = Country::query()->where('alpha_2_code', 'gb')->firstOrFail();
        foreach (self::UK_COUNTRIES as $country) {
            foreach ($country as $cityName) {
                City::query()->create(['name' => $cityName, 'country_id' => $uk->id]);
            }
        }

    }

    const UK_COUNTRIES = [
        'England' => [
            'Avon',
            'Bedfordshire',
            'Berkshire',
            'Buckinghamshire',
            'Cambridgeshire',
            'Cheshire',
            'Cleveland',
            'Cornwall',
            'Cumbria',
            'Derbyshire',
            'Devon',
            'Dorset',
            'Durham',
            'East Sussex',
            'Essex',
            'Gloucestershire',
            'Hampshire',
            'Herefordshire',
            'Hertfordshire',
            'Isle of Wight',
            'Kent',
            'Lancashire',
            'Leicestershire',
            'Lincolnshire',
            'London',
            'Merseyside',
            'Middlesex',
            'Norfolk',
            'Northamptonshire',
            'Northumberland',
            'North Humberside',
            'North Yorkshire',
            'Nottinghamshire',
            'Oxfordshire',
            'Rutland',
            'Shropshire',
            'Somerset',
            'South Humberside',
            'South Yorkshire',
            'Staffordshire',
            'Suffolk',
            'Surrey',
            'Tyne and Wear',
            'Warwickshire',
            'West Midlands',
            'West Sussex',
            'West Yorkshire',
            'Wiltshire',
            'Worcestershire'
        ],
        'Wales' => [
            'Clwyd',
            'Dyfed',
            'Gwent',
            'Gwynedd',
            'Mid Glamorgan',
            'Powys',
            'South Glamorgan',
            'West Glamorgan'
        ],
        'Scotland' => [
            'Aberdeenshire',
            'Angus',
            'Argyll',
            'Ayrshire',
            'Banffshire',
            'Berwickshire',
            'Bute',
            'Caithness',
            'Clackmannanshire',
            'Dumfriesshire',
            'Dunbartonshire',
            'East Lothian',
            'Fife',
            'Inverness-shire',
            'Kincardineshire',
            'Kinross-shire',
            'Kirkcudbrightshire',
            'Lanarkshire',
            'Midlothian',
            'Moray',
            'Nairnshire',
            'Orkney',
            'Peeblesshire',
            'Perthshire',
            'Renfrewshire',
            'Ross-shire',
            'Roxburghshire',
            'Selkirkshire',
            'Shetland',
            'Stirlingshire',
            'Sutherland',
            'West Lothian',
            'Wigtownshire'
        ],
        'Northern Ireland' => [
            'Antrim',
            'Armagh',
            'Down',
            'Fermanagh',
            'Londonderry',
            'Tyrone'
        ]
    ];
}
