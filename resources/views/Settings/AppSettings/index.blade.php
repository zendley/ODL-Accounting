@extends('layouts.navbar')


@section('title', 'App Settings')
@section('actadmin', 'active')



@section('content')









<!-- Main content -->
<section class="content">
    
    
    <div class="container" style="padding-bottom: 5em;">
        
        <form class="quoform " action="/app_settings/update/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Company Logo <span style="font-size: 70%">(Optional)</span></label> <br>
                        <input style="padding-top: 0.7mm;" type="file" class="form-control" name="company_logo">
                    </div>
                    @if ($data->company_logo != '')
                    <div class="form-group col-md-6">
                        <div>
                            <label >.</label>
                            <button onclick="location.href='/app_settings/rlogo/{{$data->id}}'" type="button" class="form-control">
                                {{-- <a style="color: #495057" href="/app_settings/rlogo/{{$data->id}}">Remove Logo</a> --}}
                                Remove Logo
                            </button>
                        </div>
                    </div>
                    @endif
                </div>

                <hr>
                
                
                
                

                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name" placeholder="Full Name" required="" value="{{$data->company_name}}">
                    <span style="color: red">
                        @error('company_name')
                          {{$message}}*
                        @enderror
                    </span>
                </div>


                <div class="form-group">
                    <label for="email">Company Address</label>
                    <input type="text" class="form-control" name="company_address" placeholder="Email" required="" value="{{$data->company_address}}">
                    <span style="color: red">
                        @error('company_address')
                          {{$message}}*
                        @enderror
                    </span>
                </div>


                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="">Company Website <span style="font-size: 70%">(Optional)</span></label>
                        <input type="text" class="form-control" name="company_website" placeholder="Email" value="{{$data->company_website}}">
                    </div>

                <div class="form-group col-md-6">
                    <label for="password">Company Phone No.</label>
                    <input type="phone" id="phone" class="form-control" name="company_phone" placeholder="Password" required="" value="{{$data->company_phone}}">
                    <span style="color: red">
                        @error('company_phone')
                          {{$message}}*
                        @enderror
                    </span>
                </div>

                </div>

                <hr>

                <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="password">Tax Percentage</label>
                    <input type="phone" id="phone" class="form-control" name="tax" placeholder="Password" required="" value="{{$data->tax}}">
                    <span style="color: red">
                        @error('tax')
                          {{$message}}*
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label class="" for="inlineFormCustomSelectPref">Currency</label>
                    <select class="custom-select" id="currency" name="currency">
                        <option>select currency</option>
                        <option {{ $data->currency === 'AFN' ? 'selected' : '' }} value="AFN">Afghan Afghani</option>
                        <option {{ $data->currency === 'ALL' ? 'selected' : '' }} value="ALL">Albanian Lek</option>
                        <option {{ $data->currency === 'DZD' ? 'selected' : '' }} value="DZD">Algerian Dinar</option>
                        <option {{ $data->currency === 'AOA' ? 'selected' : '' }} value="AOA">Angolan Kwanza</option>
                        <option {{ $data->currency === 'ARS' ? 'selected' : '' }} value="ARS">Argentine Peso</option>
                        <option {{ $data->currency === 'AMD' ? 'selected' : '' }} value="AMD">Armenian Dram</option>
                        <option {{ $data->currency === 'AWG' ? 'selected' : '' }} value="AWG">Aruban Florin</option>
                        <option {{ $data->currency === 'AUD' ? 'selected' : '' }} value="AUD">Australian Dollar</option>
                        <option {{ $data->currency === 'AZN' ? 'selected' : '' }} value="AZN">Azerbaijani Manat</option>
                        <option {{ $data->currency === 'BSD' ? 'selected' : '' }} value="BSD">Bahamian Dollar</option>
                        <option {{ $data->currency === 'BHD' ? 'selected' : '' }} value="BHD">Bahraini Dinar</option>
                        <option {{ $data->currency === 'BDT' ? 'selected' : '' }} value="BDT">Bangladeshi Taka</option>
                        <option {{ $data->currency === 'BBD' ? 'selected' : '' }} value="BBD">Barbadian Dollar</option>
                        <option {{ $data->currency === 'BYR' ? 'selected' : '' }} value="BYR">Belarusian Ruble</option>
                        <option {{ $data->currency === 'BEF' ? 'selected' : '' }} value="BEF">Belgian Franc</option>
                        <option {{ $data->currency === 'BZD' ? 'selected' : '' }} value="BZD">Belize Dollar</option>
                        <option {{ $data->currency === 'BMD' ? 'selected' : '' }} value="BMD">Bermudan Dollar</option>
                        <option {{ $data->currency === 'BTN' ? 'selected' : '' }} value="BTN">Bhutanese Ngultrum</option>
                        <option {{ $data->currency === 'BTC' ? 'selected' : '' }} value="BTC">Bitcoin</option>
                        <option {{ $data->currency === 'BOB' ? 'selected' : '' }} value="BOB">Bolivian Boliviano</option>
                        <option {{ $data->currency === 'BAM' ? 'selected' : '' }} value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                        <option {{ $data->currency === 'BWP' ? 'selected' : '' }} value="BWP">Botswanan Pula</option>
                        <option {{ $data->currency === 'BRL' ? 'selected' : '' }} value="BRL">Brazilian Real</option>
                        <option {{ $data->currency === 'GBP' ? 'selected' : '' }} value="GBP">British Pound Sterling</option>
                        <option {{ $data->currency === 'BND' ? 'selected' : '' }} value="BND">Brunei Dollar</option>
                        <option {{ $data->currency === 'BGN' ? 'selected' : '' }} value="BGN">Bulgarian Lev</option>
                        <option {{ $data->currency === 'BIF' ? 'selected' : '' }} value="BIF">Burundian Franc</option>
                        <option {{ $data->currency === 'KHR' ? 'selected' : '' }} value="KHR">Cambodian Riel</option>
                        <option {{ $data->currency === 'CAD' ? 'selected' : '' }} value="CAD">Canadian Dollar</option>
                        <option {{ $data->currency === 'CVE' ? 'selected' : '' }} value="CVE">Cape Verdean Escudo</option>
                        <option {{ $data->currency === 'KYD' ? 'selected' : '' }} value="KYD">Cayman Islands Dollar</option>
                        <option {{ $data->currency === 'XOF' ? 'selected' : '' }} value="XOF">CFA Franc BCEAO</option>
                        <option {{ $data->currency === 'XAF' ? 'selected' : '' }} value="XAF">CFA Franc BEAC</option>
                        <option {{ $data->currency === 'XPF' ? 'selected' : '' }} value="XPF">CFP Franc</option>
                        <option {{ $data->currency === 'CLP' ? 'selected' : '' }} value="CLP">Chilean Peso</option>
                        <option {{ $data->currency === 'CNY' ? 'selected' : '' }} value="CNY">Chinese Yuan</option>
                        <option {{ $data->currency === 'COP' ? 'selected' : '' }} value="COP">Colombian Peso</option>
                        <option {{ $data->currency === 'KMF' ? 'selected' : '' }} value="KMF">Comorian Franc</option>
                        <option {{ $data->currency === 'CDF' ? 'selected' : '' }} value="CDF">Congolese Franc</option>
                        <option {{ $data->currency === 'CRC' ? 'selected' : '' }} value="CRC">Costa Rican ColÃ³n</option>
                        <option {{ $data->currency === 'HRK' ? 'selected' : '' }} value="HRK">Croatian Kuna</option>
                        <option {{ $data->currency === 'CUC' ? 'selected' : '' }} value="CUC">Cuban Convertible Peso</option>
                        <option {{ $data->currency === 'CZK' ? 'selected' : '' }} value="CZK">Czech Republic Koruna</option>
                        <option {{ $data->currency === 'DKK' ? 'selected' : '' }} value="DKK">Danish Krone</option>
                        <option {{ $data->currency === 'DJF' ? 'selected' : '' }} value="DJF">Djiboutian Franc</option>
                        <option {{ $data->currency === 'DPO' ? 'selected' : '' }} value="DOP">Dominican Peso</option>
                        <option {{ $data->currency === 'XCD' ? 'selected' : '' }} value="XCD">East Caribbean Dollar</option>
                        <option {{ $data->currency === 'EGP' ? 'selected' : '' }} value="EGP">Egyptian Pound</option>
                        <option {{ $data->currency === 'ERN' ? 'selected' : '' }} value="ERN">Eritrean Nakfa</option>
                        <option {{ $data->currency === 'EEK' ? 'selected' : '' }} value="EEK">Estonian Kroon</option>
                        <option {{ $data->currency === 'ETB' ? 'selected' : '' }} value="ETB">Ethiopian Birr</option>
                        <option {{ $data->currency === 'EUR' ? 'selected' : '' }} value="EUR">Euro</option>
                        <option {{ $data->currency === 'FKP' ? 'selected' : '' }} value="FKP">Falkland Islands Pound</option>
                        <option {{ $data->currency === 'FJD' ? 'selected' : '' }} value="FJD">Fijian Dollar</option>
                        <option {{ $data->currency === 'GMD' ? 'selected' : '' }} value="GMD">Gambian Dalasi</option>
                        <option {{ $data->currency === 'GEL' ? 'selected' : '' }} value="GEL">Georgian Lari</option>
                        <option {{ $data->currency === 'DEM' ? 'selected' : '' }} value="DEM">German Mark</option>
                        <option {{ $data->currency === 'GHS' ? 'selected' : '' }} value="GHS">Ghanaian Cedi</option>
                        <option {{ $data->currency === 'GIP' ? 'selected' : '' }} value="GIP">Gibraltar Pound</option>
                        <option {{ $data->currency === 'GRQ' ? 'selected' : '' }} value="GRD">Greek Drachma</option>
                        <option {{ $data->currency === 'GTQ' ? 'selected' : '' }} value="GTQ">Guatemalan Quetzal</option>
                        <option {{ $data->currency === 'GNF' ? 'selected' : '' }} value="GNF">Guinean Franc</option>
                        <option {{ $data->currency === 'GYD' ? 'selected' : '' }} value="GYD">Guyanaese Dollar</option>
                        <option {{ $data->currency === 'HTG' ? 'selected' : '' }} value="HTG">Haitian Gourde</option>
                        <option {{ $data->currency === 'HNL' ? 'selected' : '' }} value="HNL">Honduran Lempira</option>
                        <option {{ $data->currency === 'HKD' ? 'selected' : '' }} value="HKD">Hong Kong Dollar</option>
                        <option {{ $data->currency === 'HUF' ? 'selected' : '' }} value="HUF">Hungarian Forint</option>
                        <option {{ $data->currency === 'ISK' ? 'selected' : '' }} value="ISK">Icelandic KrÃ³na</option>
                        <option {{ $data->currency === 'INR' ? 'selected' : '' }} value="INR">Indian Rupee</option>
                        <option {{ $data->currency === 'IDR' ? 'selected' : '' }} value="IDR">Indonesian Rupiah</option>
                        <option {{ $data->currency === 'IRR' ? 'selected' : '' }} value="IRR">Iranian Rial</option>
                        <option {{ $data->currency === 'IQD' ? 'selected' : '' }} value="IQD">Iraqi Dinar</option>
                        <option {{ $data->currency === 'ILS' ? 'selected' : '' }} value="ILS">Israeli New Sheqel</option>
                        <option {{ $data->currency === 'ITL' ? 'selected' : '' }} value="ITL">Italian Lira</option>
                        <option {{ $data->currency === 'JMD' ? 'selected' : '' }} value="JMD">Jamaican Dollar</option>
                        <option {{ $data->currency === 'JPY' ? 'selected' : '' }} value="JPY">Japanese Yen</option>
                        <option {{ $data->currency === 'JOD' ? 'selected' : '' }} value="JOD">Jordanian Dinar</option>
                        <option {{ $data->currency === 'KZT' ? 'selected' : '' }} value="KZT">Kazakhstani Tenge</option>
                        <option {{ $data->currency === 'KES' ? 'selected' : '' }} value="KES">Kenyan Shilling</option>
                        <option {{ $data->currency === 'KWD' ? 'selected' : '' }} value="KWD">Kuwaiti Dinar</option>
                        <option {{ $data->currency === 'KGS' ? 'selected' : '' }} value="KGS">Kyrgystani Som</option>
                        <option {{ $data->currency === 'LAK' ? 'selected' : '' }} value="LAK">Laotian Kip</option>
                        <option {{ $data->currency === 'LVL' ? 'selected' : '' }} value="LVL">Latvian Lats</option>
                        <option {{ $data->currency === 'LBP' ? 'selected' : '' }} value="LBP">Lebanese Pound</option>
                        <option {{ $data->currency === 'LSL' ? 'selected' : '' }} value="LSL">Lesotho Loti</option>
                        <option {{ $data->currency === 'LRD' ? 'selected' : '' }} value="LRD">Liberian Dollar</option>
                        <option {{ $data->currency === 'LYD' ? 'selected' : '' }} value="LYD">Libyan Dinar</option>
                        <option {{ $data->currency === 'LTL' ? 'selected' : '' }} value="LTL">Lithuanian Litas</option>
                        <option {{ $data->currency === 'MOP' ? 'selected' : '' }} value="MOP">Macanese Pataca</option>
                        <option {{ $data->currency === 'MKD' ? 'selected' : '' }} value="MKD">Macedonian Denar</option>
                        <option {{ $data->currency === 'MGA' ? 'selected' : '' }} value="MGA">Malagasy Ariary</option>
                        <option {{ $data->currency === 'MWK' ? 'selected' : '' }} value="MWK">Malawian Kwacha</option>
                        <option {{ $data->currency === 'MYR' ? 'selected' : '' }} value="MYR">Malaysian Ringgit</option>
                        <option {{ $data->currency === 'MVR' ? 'selected' : '' }} value="MVR">Maldivian Rufiyaa</option>
                        <option {{ $data->currency === 'MRO' ? 'selected' : '' }} value="MRO">Mauritanian Ouguiya</option>
                        <option {{ $data->currency === 'MUR' ? 'selected' : '' }} value="MUR">Mauritian Rupee</option>
                        <option {{ $data->currency === 'MXN' ? 'selected' : '' }} value="MXN">Mexican Peso</option>
                        <option {{ $data->currency === 'MDL' ? 'selected' : '' }} value="MDL">Moldovan Leu</option>
                        <option {{ $data->currency === 'MNT' ? 'selected' : '' }} value="MNT">Mongolian Tugrik</option>
                        <option {{ $data->currency === 'MAD' ? 'selected' : '' }} value="MAD">Moroccan Dirham</option>
                        <option {{ $data->currency === 'MZM' ? 'selected' : '' }} value="MZM">Mozambican Metical</option>
                        <option {{ $data->currency === 'MMK' ? 'selected' : '' }} value="MMK">Myanmar Kyat</option>
                        <option {{ $data->currency === 'NAD' ? 'selected' : '' }} value="NAD">Namibian Dollar</option>
                        <option {{ $data->currency === 'NPR' ? 'selected' : '' }} value="NPR">Nepalese Rupee</option>
                        <option {{ $data->currency === 'ANG' ? 'selected' : '' }} value="ANG">Netherlands Antillean Guilder</option>
                        <option {{ $data->currency === 'TWD' ? 'selected' : '' }} value="TWD">New Taiwan Dollar</option>
                        <option {{ $data->currency === 'NZD' ? 'selected' : '' }} value="NZD">New Zealand Dollar</option>
                        <option {{ $data->currency === 'NIO' ? 'selected' : '' }} value="NIO">Nicaraguan CÃ³rdoba</option>
                        <option {{ $data->currency === 'NGN' ? 'selected' : '' }} value="NGN">Nigerian Naira</option>
                        <option {{ $data->currency === 'KPW' ? 'selected' : '' }} value="KPW">North Korean Won</option>
                        <option {{ $data->currency === 'NOK' ? 'selected' : '' }} value="NOK">Norwegian Krone</option>
                        <option {{ $data->currency === 'OMR' ? 'selected' : '' }} value="OMR">Omani Rial</option>
                        <option {{ $data->currency === 'PKR' ? 'selected' : '' }} value="PKR">Pakistani Rupee</option>
                        <option {{ $data->currency === 'PAB' ? 'selected' : '' }} value="PAB">Panamanian Balboa</option>
                        <option {{ $data->currency === 'PGK' ? 'selected' : '' }} value="PGK">Papua New Guinean Kina</option>
                        <option {{ $data->currency === 'PYG' ? 'selected' : '' }} value="PYG">Paraguayan Guarani</option>
                        <option {{ $data->currency === 'PEN' ? 'selected' : '' }} value="PEN">Peruvian Nuevo Sol</option>
                        <option {{ $data->currency === 'PHP' ? 'selected' : '' }} value="PHP">Philippine Peso</option>
                        <option {{ $data->currency === 'PLN' ? 'selected' : '' }} value="PLN">Polish Zloty</option>
                        <option {{ $data->currency === 'QAR' ? 'selected' : '' }} value="QAR">Qatari Rial</option>
                        <option {{ $data->currency === 'RON' ? 'selected' : '' }} value="RON">Romanian Leu</option>
                        <option {{ $data->currency === 'RUB' ? 'selected' : '' }} value="RUB">Russian Ruble</option>
                        <option {{ $data->currency === 'RWF' ? 'selected' : '' }} value="RWF">Rwandan Franc</option>
                        <option {{ $data->currency === 'SVC' ? 'selected' : '' }} value="SVC">Salvadoran ColÃ³n</option>
                        <option {{ $data->currency === 'WST' ? 'selected' : '' }} value="WST">Samoan Tala</option>
                        <option {{ $data->currency === 'SAR' ? 'selected' : '' }} value="SAR">Saudi Riyal</option>
                        <option {{ $data->currency === 'RSD' ? 'selected' : '' }} value="RSD">Serbian Dinar</option>
                        <option {{ $data->currency === 'SCR' ? 'selected' : '' }} value="SCR">Seychellois Rupee</option>
                        <option {{ $data->currency === 'SLL' ? 'selected' : '' }} value="SLL">Sierra Leonean Leone</option>
                        <option {{ $data->currency === 'SGD' ? 'selected' : '' }} value="SGD">Singapore Dollar</option>
                        <option {{ $data->currency === 'SKK' ? 'selected' : '' }} value="SKK">Slovak Koruna</option>
                        <option {{ $data->currency === 'SBD' ? 'selected' : '' }} value="SBD">Solomon Islands Dollar</option>
                        <option {{ $data->currency === 'SOS' ? 'selected' : '' }} value="SOS">Somali Shilling</option>
                        <option {{ $data->currency === 'ZAR' ? 'selected' : '' }} value="ZAR">South African Rand</option>
                        <option {{ $data->currency === 'KRW' ? 'selected' : '' }} value="KRW">South Korean Won</option>
                        <option {{ $data->currency === 'XDR' ? 'selected' : '' }} value="XDR">Special Drawing Rights</option>
                        <option {{ $data->currency === 'LKR' ? 'selected' : '' }} value="LKR">Sri Lankan Rupee</option>
                        <option {{ $data->currency === 'SHP' ? 'selected' : '' }} value="SHP">St. Helena Pound</option>
                        <option {{ $data->currency === 'SDG' ? 'selected' : '' }} value="SDG">Sudanese Pound</option>
                        <option {{ $data->currency === 'SRD' ? 'selected' : '' }} value="SRD">Surinamese Dollar</option>
                        <option {{ $data->currency === 'SZL' ? 'selected' : '' }} value="SZL">Swazi Lilangeni</option>
                        <option {{ $data->currency === 'SEK' ? 'selected' : '' }} value="SEK">Swedish Krona</option>
                        <option {{ $data->currency === 'CHF' ? 'selected' : '' }} value="CHF">Swiss Franc</option>
                        <option {{ $data->currency === 'SYP' ? 'selected' : '' }} value="SYP">Syrian Pound</option>
                        <option {{ $data->currency === 'STD' ? 'selected' : '' }} value="STD">São Tomé and Príncipe Dobra</option>
                        <option {{ $data->currency === 'TJS' ? 'selected' : '' }} value="TJS">Tajikistani Somoni</option>
                        <option {{ $data->currency === 'TZS' ? 'selected' : '' }} value="TZS">Tanzanian Shilling</option>
                        <option {{ $data->currency === 'THB' ? 'selected' : '' }} value="THB">Thai Baht</option>
                        <option {{ $data->currency === 'TOP' ? 'selected' : '' }} value="TOP">Tongan pa'anga</option>
                        <option {{ $data->currency === 'TTD' ? 'selected' : '' }} value="TTD">Trinidad & Tobago Dollar</option>
                        <option {{ $data->currency === 'TND' ? 'selected' : '' }} value="TND">Tunisian Dinar</option>
                        <option {{ $data->currency === 'TRY' ? 'selected' : '' }} value="TRY">Turkish Lira</option>
                        <option {{ $data->currency === 'TMT' ? 'selected' : '' }} value="TMT">Turkmenistani Manat</option>
                        <option {{ $data->currency === 'UGX' ? 'selected' : '' }} value="UGX">Ugandan Shilling</option>
                        <option {{ $data->currency === 'UAH' ? 'selected' : '' }} value="UAH">Ukrainian Hryvnia</option>
                        <option {{ $data->currency === 'AED' ? 'selected' : '' }} value="AED">United Arab Emirates Dirham</option>
                        <option {{ $data->currency === 'UYU' ? 'selected' : '' }} value="UYU">Uruguayan Peso</option>
                        <option {{ $data->currency === 'USD' ? 'selected' : '' }} value="USD">US Dollar</option>
                        <option {{ $data->currency === 'UZS' ? 'selected' : '' }} value="UZS">Uzbekistan Som</option>
                        <option {{ $data->currency === 'VUV' ? 'selected' : '' }} value="VUV">Vanuatu Vatu</option>
                        <option {{ $data->currency === 'VEF' ? 'selected' : '' }} value="VEF">Venezuelan BolÃ­var</option>
                        <option {{ $data->currency === 'VND' ? 'selected' : '' }} value="VND">Vietnamese Dong</option>
                        <option {{ $data->currency === 'TER' ? 'selected' : '' }} value="YER">Yemeni Rial</option>
                        <option {{ $data->currency === 'ZMK' ? 'selected' : '' }} value="ZMK">Zambian Kwacha</option>
                    </select>
                    <span style="color: red">
                        @error('currency')
                          {{$message}}*
                        @enderror
                    </span>
                </div>

                </div>


                <div class="text-right">
                    <button type="submit" class="btn btn-primary " style="width: 5em; background-color: #BB292A; border-color: #BB292A">Update</button>
                </div>
            </form>



    </div>

    
  </section>
  <!-- /.content -->






  



 

@endsection