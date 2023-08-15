<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MultiSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('github_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('insta_url')
                    ->url()
                    ->maxLength(255),
                FileUpload::make('hero_gift')
                    ->image()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pronouns')
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                Forms\Components\Select::make('languages')
                    ->multiple()
                    ->searchable()
                    ->options([
                        "af" => "Afrikaans",
                        "sq" => "Albanian - shqip",
                        "am" => "Amharic - አማርኛ",
                        "ar" => "Arabic - العربية",
                        "an" => "Aragonese - aragonés",
                        "hy" => "Armenian - հայերեն",
                        "ast" => "Asturian - asturianu",
                        "az" => "Azerbaijani - azərbaycan dili",
                        "eu" => "Basque - euskara",
                        "be" => "Belarusian - беларуская",
                        "bn" => "Bengali - বাংলা",
                        "bs" => "Bosnian - bosanski",
                        "br" => "Breton - brezhoneg",
                        "bg" => "Bulgarian - български",
                        "ca" => "Catalan - català",
                        "ckb" => "Central Kurdish - کوردی (دەستنوسی عەرەبی)",
                        "zh" => "Chinese - 中文",
                        "zh-HK" => "Chinese (Hong Kong) - 中文（香港）",
                        "zh-CN" => "Chinese (Simplified) - 中文（简体）",
                        "zh-TW" => "Chinese (Traditional) - 中文（繁體）",
                        "co" => "Corsican",
                        "hr" => "Croatian - hrvatski",
                        "cs" => "Czech - čeština",
                        "da" => "Danish - dansk",
                        "nl" => "Dutch - Nederlands",
                        "en" => "English",
                        "en-AU" => "English (Australia)",
                        "en-CA" => "English (Canada)",
                        "en-IN" => "English (India)",
                        "en-NZ" => "English (New Zealand)",
                        "en-ZA" => "English (South Africa)",
                        "en-GB" => "English (United Kingdom)",
                        "en-US" => "English (United States)",
                        "eo" => "Esperanto - esperanto",
                        "et" => "Estonian - eesti",
                        "fo" => "Faroese - føroyskt",
                        "fil" => "Filipino",
                        "fi" => "Finnish - suomi",
                        "fr" => "French - français",
                        "fr-CA" => "French (Canada) - français (Canada)",
                        "fr-FR" => "French (France) - français (France)",
                        "fr-CH" => "French (Switzerland) - français (Suisse)",
                        "gl" => "Galician - galego",
                        "ka" => "Georgian - ქართული",
                        "de" => "German - Deutsch",
                        "de-AT" => "German (Austria) - Deutsch (Österreich)",
                        "de-DE" => "German (Germany) - Deutsch (Deutschland)",
                        "de-LI" => "German (Liechtenstein) - Deutsch (Liechtenstein)",
                        "de-CH" => "German (Switzerland) - Deutsch (Schweiz)",
                        "el" => "Greek - Ελληνικά",
                        "gn" => "Guarani",
                        "gu" => "Gujarati - ગુજરાતી",
                        "ha" => "Hausa",
                        "haw" => "Hawaiian - ʻŌlelo Hawaiʻi",
                        "he" => "Hebrew - עברית",
                        "hi" => "Hindi - हिन्दी",
                        "hu" => "Hungarian - magyar",
                        "is" => "Icelandic - íslenska",
                        "id" => "Indonesian - Indonesia",
                        "ia" => "Interlingua",
                        "ga" => "Irish - Gaeilge",
                        "it" => "Italian - italiano",
                        "it-IT" => "Italian (Italy) - italiano (Italia)",
                        "it-CH" => "Italian (Switzerland) - italiano (Svizzera)",
                        "ja" => "Japanese - 日本語",
                        "kn" => "Kannada - ಕನ್ನಡ",
                        "kk" => "Kazakh - қазақ тілі",
                        "km" => "Khmer - ខ្មែរ",
                        "ko" => "Korean - 한국어",
                        "ku" => "Kurdish - Kurdî",
                        "ky" => "Kyrgyz - кыргызча",
                        "lo" => "Lao - ລາວ",
                        "la" => "Latin",
                        "lv" => "Latvian - latviešu",
                        "ln" => "Lingala - lingála",
                        "lt" => "Lithuanian - lietuvių",
                        "mk" => "Macedonian - македонски",
                        "ms" => "Malay - Bahasa Melayu",
                        "ml" => "Malayalam - മലയാളം",
                        "mt" => "Maltese - Malti",
                        "mr" => "Marathi - मराठी",
                        "mn" => "Mongolian - монгол",
                        "ne" => "Nepali - नेपाली",
                        "no" => "Norwegian - norsk",
                        "nb" => "Norwegian Bokmål - norsk bokmål",
                        "nn" => "Norwegian Nynorsk - nynorsk",
                        "oc" => "Occitan",
                        "or" => "Oriya - ଓଡ଼ିଆ",
                        "om" => "Oromo - Oromoo",
                        "ps" => "Pashto - پښتو",
                        "fa" => "Persian - فارسی",
                        "pl" => "Polish - polski",
                        "pt" => "Portuguese - português",
                        "pt-BR" => "Portuguese (Brazil) - português (Brasil)",
                        "pt-PT" => "Portuguese (Portugal) - português (Portugal)",
                        "pa" => "Punjabi - ਪੰਜਾਬੀ",
                        "qu" => "Quechua",
                        "ro" => "Romanian - română",
                        "mo" => "Romanian (Moldova) - română (Moldova)",
                        "rm" => "Romansh - rumantsch",
                        "ru" => "Russian - русский",
                        "gd" => "Scottish Gaelic",
                        "sr" => "Serbian - српски",
                        "sh" => "Serbo-Croatian - Srpskohrvatski",
                        "sn" => "Shona - chiShona",
                        "sd" => "Sindhi",
                        "si" => "Sinhala - සිංහල",
                        "sk" => "Slovak - slovenčina",
                        "sl" => "Slovenian - slovenščina",
                        "so" => "Somali - Soomaali",
                        "st" => "Southern Sotho",
                        "es" => "Spanish - español",
                        "es-AR" => "Spanish (Argentina) - español (Argentina)",
                        "es-419" => "Spanish (Latin America) - español (Latinoamérica)",
                        "es-MX" => "Spanish (Mexico) - español (México)",
                        "es-ES" => "Spanish (Spain) - español (España)",
                        "es-US" => "Spanish (United States) - español (Estados Unidos)",
                        "su" => "Sundanese",
                        "sw" => "Swahili - Kiswahili",
                        "sv" => "Swedish - svenska",
                        "tg" => "Tajik - тоҷикӣ",
                        "ta" => "Tamil - தமிழ்",
                        "tt" => "Tatar",
                        "te" => "Telugu - తెలుగు",
                        "th" => "Thai - ไทย",
                        "ti" => "Tigrinya - ትግርኛ",
                        "to" => "Tongan - lea fakatonga",
                        "tr" => "Turkish - Türkçe",
                        "tk" => "Turkmen",
                        "tw" => "Twi",
                        "uk" => "Ukrainian - українська",
                        "ur" => "Urdu - اردو",
                        "ug" => "Uyghur",
                        "uz" => "Uzbek - o‘zbek",
                        "vi" => "Vietnamese - Tiếng Việt",
                        "wa" => "Walloon - wa",
                        "cy" => "Welsh - Cymraeg",
                        "fy" => "Western Frisian",
                        "xh" => "Xhosa",
                        "yi" => "Yiddish",
                        "yo" => "Yoruba - Èdè Yorùbá",
                        "zu" => "Zulu - isiZulu",
                    ]),
                Forms\Components\TextInput::make('pit_animal')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
