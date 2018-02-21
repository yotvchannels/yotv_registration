<?php
namespace App\Forms;

use App;
use Nette;
use Nette\Application\UI\Form;


interface RegistrationFormControlFactory
{
	/** @return RegistrationFormControl */
	public function create();
}


class RegistrationFormControl extends Nette\Application\UI\Control
{

	/**
	 * @var App\Model\ModernTv
	 */
	private $modernTv;


	public function __construct(App\Model\ModernTv $modernTv)
	{
		parent::__construct();
		$this->modernTv = $modernTv;
	}


	public function render()
	{
		$this->getTemplate()->render(str_replace('.php', '.latte', __FILE__));
	}


	protected function createComponentRegistrationForm()
	{
		$form = new Form;
$form->addText('fname', 'First Name:')->setRequired()->setAttribute('class', 'form-control4 ');

$form->addText('lname', 'Other Name:')->setRequired()->setAttribute('class', 'form-control4 ');

		$form->addText('email', 'Email:')->setRequired(TRUE)->addRule(Form::EMAIL, 'Enter valid email')->setAttribute('class', 'form-control4');

		$form->addPassword('password', 'Password:')
			->addRule(Form::MIN_LENGTH, 'Minimum length is 5 characters', 5)
			->setRequired()->setAttribute('class', 'form-control4');
		$form->addPassword('password2', 'Repeat password:')
			->setRequired()
			->addRule(Form::EQUAL, 'Password are not same', $form['password'])->setAttribute('class', 'form-control4');

		$form->addText('age', 'Date of Birth:mm/dd/yyyy')->setRequired()->setAttribute('class', 'form-control4 datepicker');
		$form->addSelect('country', 'County of Residence:', [
			'Uganda'   => 'Uganda',
			'United States' => 'United States',
			'United Kingdom'   => 'United Kingdom',
			'United Arab Emirates'   => 'United Arab Emirates',
			'Afghanistan'   => 'Afghanistan',
			'Albania'   => 'Albania',
            'Algeria'   => 'Algeria',
			'American Samoa'   => 'American Samoa',
			'Andorra'   => 'Andorra',
			'Angola'   => 'Angola',
			'Anguilla'   => 'Anguilla',
			'Antartica'   => 'Antartica',
			'Antigua and Barbuda'   => 'Antigua and Barbuda',
			'Argentina'   => 'Argentina',
			'Armenia'   => 'Armenia',
			'Aruba'   => 'Aruba',
			'Australia'   => 'Australia',
			'Austria'   => 'Austria',
			'Azerbaijan'   => 'Azerbaijan',
			'Bahamas'   => 'Bahamas',
			'Bahrain'   => 'Bahrain',
			'Bangladesh'   => 'Bangladesh',
			'Barbados'   => 'Barbados',
			'Belarus'   => 'Belarus',
			'Belgium'   => 'Belgium',
			'Belize'   => 'Belize',
			'Benin'   => 'Benin',
			'Bermuda'   => 'Bermuda',
			'Bhutan'   => 'Bhutan',
			'Bolivia'   => 'Bolivia',
			'Bosnia and Herzegowina'   => 'Bosnia and Herzegowina',
			'Botswana'   => 'Botswana',
			'Bouvet Island'   => 'Bouvet Island',
			'Brazil'   => 'Brazil',
			'British Indian Ocean Territory'   => 'British Indian Ocean Territory',
			'Brunei Darussalam'   => 'Brunei Darussalam',
			'Bulgaria'   => 'Bulgaria',
			'Burkina Faso'   => 'Burkina Faso',
			'Burundi'   => 'Burundi',
			'Cambodia'   => 'Cambodia',
			'Cameroon'   => 'Cameroon',
			'Canada'   => 'Bulgaria',
			'Bulgaria'   => 'Canada',
			'Cape Verde'   => 'Cape Verde',
			'Cayman Islands'   => 'Cayman Islands',
			'Central African Republic'   => 'Central African Republic',
			'Chad'   => 'Chad',
			'Chile'   => 'Chile',
			'China'   => 'China',
			'Christmas Island'   => 'Christmas Island',
			'Cocos Islands'   => 'Cocos Islands',
			'Colombia'   => 'Colombia',
			'Comoros'   => 'Comoros',
			'Congo'   => 'Congo',
			'Congo'   => 'Congo, the Democratic Republic',
			'Cook Islands'   => 'Cook Islands',
			'Costa Rica'   => 'Costa Rica',
			'Cota DIvoire'   => 'Cota DIvoire',
			'Croatia'   => 'Croatia',
			'Cuba'   => 'Cuba',
			'Cyprus'   => 'Cyprus',
			'Czech Republic'   => 'Czech Republic',
			'Denmark'   => 'Denmark',
			'Djibouti'   => 'Djibouti',
			'Dominica'   => 'Dominica',
			'Dominican Republic'   => 'Dominican Republic',
			'East Timor'   => 'East Timor',
			'Ecuador'   => 'Ecuador',
			'Egypt'   => 'Egypt',
			'El Salvado'   => 'El Salvado',
			'Equatorial Guinea'   => 'Equatorial Guinea',
			'Eritrea'   => 'Eritrea',
			'Estonia'   => 'Estonia',
			'Ethiopia'   => 'Ethiopia',
			'Falkland Islands'   => 'Falkland Islands',
			'Faroe Islands'   => 'Faroe Islands',
			'Fiji'   => 'Fiji',
			'Finland'   => 'Finland',
			'France'   => 'France',
			'France Metropolitan'   => 'France Metropolitan',
			'French Guiana'   => 'French Guiana',
			'French Polynesia'   => 'French Polynesia',
			'French Southern Territories'   => 'French Southern Territories',
			'Gabon'   => 'Gabon',
			'Gambia'   => 'Gambia',
			'Georgia'   => 'Georgia',
			'Germany'   => 'Germany',
			'Ghana'   => 'Ghana',
			'Gibraltar'   => 'Gibraltar',
			'Greece'   => 'Greece',
			'Greenland'   => 'Greenland',
			'Grenada'   => 'Grenada',
			'Guadeloupe'   => 'Guadeloupe',
			'Guam'   => 'Guam',
			'Guatemala'   => 'Guatemala',
			'Guinea'   => 'Guinea',
			'Guinea-Bissau'   => 'Guinea-Bissau',
			'Guyana'   => 'Guyana',
			'Haiti'   => 'Haiti',
			'Heard and McDonald Islands'   => 'Heard and McDonald Islands',
			'Holy See (Vatican City State)'   => 'Holy See (Vatican City State)',
			'Honduras'   => 'Honduras',
			'Hong Kong'   => 'Hong Kong',
			'Hungary'   => 'Hungary',
			'Iceland'   => 'Iceland',
			'India'   => 'India',
			'Indonesia'   => 'Indonesia',
			'Iran (Islamic Republic of)'   => 'Iran (Islamic Republic of)',
			'Iraq'   => 'Iraq',
			'Ireland'   => 'Ireland',
			'Israel'   => 'Israel',
			'Italy'   => 'Italy',
			'Jamaica'   => 'Jamaica',
			'Japan'   => 'Japan',
			'Jordan'   => 'Jordan',
			'Kazakhstan'   => 'Kazakhstan',
			'Kenya'   => 'Kenya',
			'Kiribati'   => 'Kiribati',
			'Democratic Peoples Republic of Korea'   => 'Democratic Peoples Republic of Korea',
			'Korea'   => 'Korea, Republic of',
			'Kuwait'   => 'Kuwait',
			'Kyrgyzstan'   => 'Kyrgyzstan',
			'Lao'   => 'Lao Peoples Democratic Republic',
			'Latvia'   => 'Latvia',
			'Lebanon'   => 'Lebanon',
			'Lesotho'   => 'Lesotho',
			'Liberia'   => 'Liberia',
			'Libyan Arab Jamahiriya'   => 'Libyan Arab Jamahiriya',
			'Liechtenstein'   => 'Liechtenstein',
			'Lithuania'   => 'Lithuania',
			'Luxembourg'   => 'Luxembourg',
			'Macau'   => 'Macau',
			'Macedonia'   => 'Macedonia',
			'Madagascar'   => 'Madagascar',
			'Malawi'   => 'Malawi',
			'Malaysia'   => 'Malaysia',
			'Maldives'   => 'Maldives',
			'Mali'   => 'Mali',
			'Malta'   => 'Malta',
			'Marshall Islands'   => 'Marshall Islands',
			'Martinique'   => 'Martinique',
			'Mauritania'   => 'Mauritania',
			'Mauritius'   => 'Mauritius',
			'Mayotte'   => 'Mayotte',
			'Mexico'   => 'Mexico',
			'Micronesia'   => 'Micronesia',
			'Moldova'   => 'Moldova',
			'Monaco'   => 'Monaco',
			'Mongolia'   => 'Mongolia',
			'Montserrat'   => 'Montserrat',
			'Morocco'   => 'Morocco',
			'Mozambique'   => 'Mozambique',
			'Myanmar'   => 'Myanmar',
			'Namibia'   => 'Namibia',
			'Nauru'   => 'Nauru',
			'Nepal'   => 'Nepal',
			'Netherlands'   => 'Netherlands',
			'New Caledonia'   => 'New Caledonia',
			'New Zealand'   => 'New Zealand',
			'Nicaragua'   => 'Nicaragua',
			'Niger'   => 'Niger',
			'Nigeria'   => 'Nigeria',
			'Niue'   => 'Niue',
			'Norfolk Island'   => 'Norfolk Island',
			'Northern Mariana Islands'   => 'Northern Mariana Islands',
			'Norway'   => 'Norway',
			'Oman'   => 'Oman',
			'Pakistan'   => 'Pakistan',
			'Palau'   => 'Palau',
			'Panama'   => 'Panama',
			'Papua New Guinea'   => 'Papua New Guinea',
			'Paraguay'   => 'Paraguay',
			'Peru'   => 'Peru',
			'Philippines'   => 'Philippines',
			'Pitcairn'   => 'Pitcairn',
			'Poland'   => 'Poland',
			'Portugal'   => 'Portugal',
			'Puerto Rico'   => 'Puerto Rico',
			'Qatar'   => 'Qatar',
			'Reunion'   => 'Reunion',
			'Romania'   => 'Romania',
			'Russia'   => 'Russia',
			'Rwanda'   => 'Rwanda',
			'Saint Kitts and Nevis'   => 'Saint Kitts and Nevis',
			'Saint LUCIA'   => 'Saint LUCIA',
			'Saint Vincent'   => 'Saint Vincent',
			'Samoa'   => 'Samoa',
			'San Marino'   => 'San Marino',
			'Sao Tome and Principe'   => 'Sao Tome and Principe',
			'Saudi Arabia'   => 'Saudi Arabia',
			'Senegal'   => 'Senegal',
			'Seychelles'   => 'Seychelles',
			'Sierra'   => 'Sierra',
			'Singapore'   => 'Singapore',
			'Slovakia'   => 'Slovakia',
			'Slovenia'   => 'Slovenia',
			'Solomon Islands'   => 'Solomon Islands',
			'Somalia'   => 'Somalia',
			'South Africa'   => 'South Africa',
			'South Georgia'   => 'South Georgia',
			'Spain'   => 'Spain',
			'SriLanka'   => 'SriLanka',
			'St. Helena'   => 'St. Helena',
			'St. Pierre and Miguelon'   => 'St. Pierre and Miguelon',
			'Sudan'   => 'Sudan',
			'Suriname'   => 'Suriname',
			'Svalbard'   => 'Svalbard',
			'Swaziland'   => 'Swaziland',
			'Sweden'   => 'Sweden',
			'Switzerland'   => 'Switzerland',
			'Syria'   => 'Syria',
			'Taiwan'   => 'Taiwan',
			'Tajikistan'   => 'Tajikistan',
			'Tanzania'   => 'Tanzania',
			'Thailand'   => 'Thailand',
			'Togo'   => 'Togo',
			'Tokelau'   => 'Tokelau',
			'Tonga'   => 'Tonga',
			'Trinidad and Tobago'   => 'Trinidad and Tobago',
			'Tunisia'   => 'Tunisia',
			'Turkey'   => 'Turkey',
			'Turkmenistan'   => 'Turkmenistan',
			'Turks and Caicos'   => 'Turks and Caicos',
			'Tuvalu'   => 'Tuvalu',
			'Ukraine'   => 'Ukraine',
			'United States Minor Outlying Islands'   => 'United States Minor Outlying Islands',
			'Uruguay'   => 'Uruguay',
			'Uzbekistan'   => 'Uzbekistan',
			'Vanuatu'   => 'Vanuatu',
			'Venezuela'   => 'Venezuela',
			'Vietnam'   => 'Vietnam',
			'Virgin Islands (British)'   => 'Virgin Islands (British)',
			'Virgin Islands (U.S.)'   => 'Virgin Islands (U.S.)',
			'Wallis and Futana Islands'   => 'Wallis and Futana Islands',
			'Western Sahara'   => 'Western Sahara',
			'Yemen'   => 'Yemen',
			'Yugoslavia'   => 'Yugoslavia',
			'Zambia'   => 'Zambia',
			'Zimbabwe'   => 'Zimbabwe',


		])->setRequired()->setAttribute('class', 'form-control4');
		$form->addSelect('gender', 'Gender:', [
			'male'   => 'Male',
			'female' => 'Female',
		])->setRequired()->setAttribute('class', 'form-control4');
		$form->addText('phone', 'Phone:')->setRequired()->setAttribute('class', 'form-control4');

		$form->addCheckbox('agree', '
By creating an account you agree to our Privacy policy.')
    ->setDefaultValue(true);

		$form->addSubmit('submit', 'Create an Account')->setAttribute('class', 'btn btn-lg button1-success btn-block');

		$form->onSuccess[] = [$this, 'registerFormSucceeded'];
		return $form;
	}


	public function registerFormSucceeded($form, $values)
	{
		try {
			$this->modernTv->register($values);
		} catch (App\Lib\ApiException $e) {
			if ($e->getMessage() == App\Lib\ApiException::ALBAYAN_EMAIL_USED) {
				$form->addError('This email is already in use, please select different one');
				return;
			}
			throw $e;
		}
		$this->presenter->flashMessage('Registration completed');
		$this->presenter->redirect('proceed');
	}

}
