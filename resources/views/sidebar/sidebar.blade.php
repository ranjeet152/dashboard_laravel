@extends('layout.sidebar-hero')

@section('main-sidebar-page')
 
<div class="container">
    <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Admin Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Country & Maps</a>
              </div>
            </div>
            
            <div class="row row-card-no-pd">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <h4 class="card-title">Users Geolocation</h4>
                      <div class="card-tools">
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-angle-down"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"
                        >
                          <span class="fa fa-sync-alt"></span>
                        </button>
                        <button
                          class="btn btn-icon btn-link btn-primary btn-xs"
                        >
                          <span class="fa fa-times"></span>
                        </button>
                      </div>
                    </div>
                    <p class="card-category">
                      Map of the distribution of users around the world
                    </p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="table-responsive table-hover table-sales">
                          <table class="table">
                            <tbody>
                            <tr>
                                <td style="font-size: 1.2rem; color: red;">Maps</td>
                                <td style="font-size: 1.2rem; color: red;">Name</td>
                                <td style="font-size: 1.2rem; color: red;">Currency</td>
                                <td style="font-size: 1.2rem; color: red;">Capital</td>
                            </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img 
                                      src="{{ asset('assets/img/flags/id.png') }}" 
                                      alt="indonesia"
                                    />
                                  </div>
                                </td>
                                <td>Indonesia</td>
                                <td>Indonesian Rupiah </td>
                                <td>Jakarta</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/us.png') }}"
                                      alt="united states"
                                    />
                                  </div>
                                </td>
                                <td>USA</td>
                                <td>United States Dollar </td>
                                <td>Washington</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ua.png') }}"
                                      alt="australia"
                                    />
                                  </div>
                                </td>
                                <td>Australia</td>
                                <td>Australian Dollar</td>
                                <td>Canberra</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ru.png') }}"
                                      alt="russia"
                                    />
                                  </div>
                                </td>
                                <td>Russia</td>
                                <td>Russian Ruble</td>
                                <td>Moscow</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/cn.png') }}"
                                      alt="china"
                                    />
                                  </div>
                                </td>
                                <td>China</td>
                                <td>Chinese Yuan</td>
                                <td>Beijing</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/br.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Brasil</td>
                                <td>Brazilian Real</td>
                                <td>Brasília</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/in.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>India</td>
                                <td>Indian Rupee </td>
                                <td>New Delhi</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/jp.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Japan</td>
                                <td>Japanese Yen</td>
                                <td>Tokyo</td>
                              </tr><tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ir.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Iran</td>
                                <td>Iranian Rial</td>
                                <td>Tehran</td>
                              </tr><tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/co.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Colombia </td>
                                <td>Colombian Peso</td>
                                <td>Bogotá</td>
                              </tr><tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/at.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Austria</td>
                                <td>Euro </td>
                                <td>Vienna</td>
                              </tr><tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/kr.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>South Korea</td>
                                <td>South Korean Won</td>
                                <td>Seoul</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/is.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Iceland</td>
                                <td>Icelandic Króna</td>
                                <td>Reykjavík</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ke.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Kenya</td>
                                <td>Kenyan Shilling</td>
                                <td>Nairobi</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/mk.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>North Macedonia</td>
                                <td>Macedonian Denar</td>
                                <td>Skopje</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/mv.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Maldives</td>
                                <td>Maldivian Rufiyaa</td>
                                <td>Malé</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pk.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Pakistan</td>
                                <td>Pakistani Rupee </td>
                                <td>Islamabad</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pf.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>French Polynesia </td>
                                <td>CFP Franc</td>
                                <td>Papeete</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ph.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Philippines</td>
                                <td>Philippine Peso</td>
                                <td>Manila</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pr.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Puerto Rico</td>
                                <td>United States Dollar</td>
                                <td>San Juan</td>
                              </tr>  
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/so.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Somalia</td>
                                <td>Somali Shilling</td>
                                <td>Mogadishu</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ar.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Argentina</td>
                                <td>Argentine Peso</td>
                                <td>Buenos Aires</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ao.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Angola</td>
                                <td>Angolan Kwanza</td>
                                <td>Luanda</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ad.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Andorra </td>
                                <td>Euro</td>
                                <td>Andorra la Vella</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ai.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td> Anguilla</td>
                                <td>East Caribbean Dollar</td>
                                <td>The Valley</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/nc.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>New Caledonia</td>
                                <td>CFP Franc </td>
                                <td>Nouméa</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/tj.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Tajikistan</td>
                                <td>Tajikistani Somoni</td>
                                <td>Dushanbe</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ug.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Uganda</td>
                                <td>Ugandan Shilling</td>
                                <td>Kampala</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/sy.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Syria </td>
                                <td>Syrian Pound</td>
                                <td>Damascus</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ug.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Uganda</td>
                                <td>Ugandan Shilling</td>
                                <td>Kampala</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ve.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Venezuela</td>
                                <td>Venezuelan Bolívar</td>
                                <td>Caracas</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ye.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Yemen</td>
                                <td>Yemeni Rial</td>
                                <td>Sana'a</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pa.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Panama</td>
                                <td>Panamanian Balboa & United States Dollar</td>
                                <td>Panama City</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ge.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Georgia</td>
                                <td>Georgian Lari</td>
                                <td>Tbilisi</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/gh.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Ghana</td>
                                <td>Ghanaian Cedi</td>
                                <td>Accra</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/eh.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Western Sahara</td>
                                <td>Moroccan Dirham (MAD, د.م) & Sahrawi Peseta </td>
                                <td>Laayoune</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/eg.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Egypt</td>
                                <td>Egyptian Pound</td>
                                <td>Cairo</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/cv.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Cape Verde</td>
                                <td>Cape Verdean Escudo</td>
                                <td>Praia</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/gy.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Guyana</td>
                                <td>Guyanese Dollar</td>
                                <td>Georgetown</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/gu.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Guam</td>
                                <td>United States Dollar</td>
                                <td>Hagåtña</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/iq.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Iraq</td>
                                <td>Iraqi Dinar</td>
                                <td>Baghdad</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ir.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Iran</td>
                                <td>Iranian Rial</td>
                                <td>Tehran</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/jo.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Jordan</td>
                                <td>Jordanian Dinar</td>
                                <td>Amman</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/km.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Comoros</td>
                                <td>Comorian Franc</td>
                                <td>Moroni</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/la.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Laos</td>
                                <td>Lao Kip</td>
                                <td>Vientiane</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/hr.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Croatia</td>
                                <td>Euro (EUR, €)</td>
                                <td>Zagreb</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/ne.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Niger</td>
                                <td>West African CFA Franc</td>
                                <td>Niamey</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/nz.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>New Zealand</td>
                                <td>New Zealand Dollar</td>
                                <td>Wellington</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pl.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Poland</td>
                                <td>Polish Złoty</td>
                                <td>Warsaw</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pm.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Saint Pierre and Miquelon</td>
                                <td>Euro (EUR, €)</td>
                                <td>Saint-Pierre</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="flag">
                                    <img
                                      src="{{ asset('assets/img/flags/pw.png') }}"
                                      alt="brazil"
                                    />
                                  </div>
                                </td>
                                <td>Palau</td>
                                <td>United States Dollar</td>
                                <td>Ngerulmud</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mapcontainer">
                          <div
                            id="world-map"
                            class="w-100"
                            style="height: 100%;
                            aspect-ratio: 3 / 2;  
                            background: lightblue;
                            border: 1px solid #ccc;
                            border-radius: 10px;
                            margin-top: 25px;"
                          ></div> 
                        </div>
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15372354.543821877!2d62.06144403049472!3d19.83926551361796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1741337300832!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52874950.68476511!2d-161.69936650715013!3d36.014655094782206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1741333849881!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div>
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7057418.376570425!2d63.69460864964179!3d30.265436841150805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2sin!4v1741366031460!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2751235.9763225876!2d10.700952751099255!3d47.66977742052789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079b259d2a7f%3A0x1012d47bdde4c1af!2sAustria!5e0!3m2!1sen!2sin!4v1741337127244!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div>
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313890.016585659!2d125.22736874006968!3d35.79451437920629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2sSouth%20Korea!5e0!3m2!1sen!2sin!4v1741366215193!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26287327.006222587!2d-84.89344103515936!3d-36.4599191851185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaf5f5fdc667%3A0x3d2f77992af00fa8!2sArgentina!5e0!3m2!1sen!2sin!4v1741371338229!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div>
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242307.83606660189!2d-63.36530510972159!3d18.39012301333982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0e63748eef01e5%3A0x3b9d6ad384e0d481!2sAnguilla!5e0!3m2!1sen!2sin!4v1741371442338!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13879272.300274018!2d43.04230763210365!3d31.865975955514465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef7ec2ec16b1df1%3A0x40b095d39e51face!2sIran!5e0!3m2!1sen!2sin!4v1741371562429!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7292366.356309542!2d25.573128954988224!3d26.816859436002197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2sEgypt!5e0!3m2!1sen!2sin!4v1741371717719!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div>  
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2020985.9321804415!2d-81.42785522306714!3d8.378220221549501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa61583c8be2be3%3A0x79eee04d1fa59bcf!2sPanama!5e0!3m2!1sen!2sin!4v1741371825885!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7791177.942519333!2d2.7736165314253847!3d17.541559961995763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1199ec7ac6a1af5d%3A0xc933920a158e24d4!2sNiger!5e0!3m2!1sen!2sin!4v1741371923027!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492529.4319134904!2d34.47631195618302!3d31.257466891070518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15006f476664de99%3A0x8d285b0751264e99!2sJordan!5e0!3m2!1sen!2sin!4v1741372087525!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div> 
                        <div class="mapcontainer">
                          <div id="world-map" class="w-100" style="
                              height: 100%;
                              aspect-ratio: 3 / 2;  
                              background: lightblue;
                              border: 1px solid #ccc;
                              border-radius: 10px;
                              overflow: hidden; 
                              margin-top: 5px;
                          ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8016749.27122287!2d12.47033381406883!3d-11.155886248029372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f24ecaad8b27%3A0x590a289d0d4a4e3d!2sAngola!5e0!3m2!1sen!2sin!4v1741372277163!5m2!1sen!2sin" 
                              width="100%" 
                              height="100%" 
                              style="border:0; border-radius: 10px;" 
                              allowfullscreen="" 
                              loading="lazy">
                            </iframe>
                          </div> 
                        </div>  

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
    </div>
</div>
 
@endsection