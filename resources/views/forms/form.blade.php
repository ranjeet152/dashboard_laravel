@extends('layout.simple-hero')

@section('main-simple-page')

<div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="{{ route('dashboard') }}">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('forms.form') }}">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ route('forms.form') }}">Basic Form</a>
                </li>
              </ul>
            </div>
            <form action="{{route('submitform')}}" method="post" enctype="multipart-formdata">
              @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Elements</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">User Name</label>
                          <input
                            type="name"
                            name="name"
                            class="form-control"
                            placeholder="Enter your name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="email2">Email Address</label>
                          <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email"
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >We'll never share your email with anyone
                            else.</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Enter Password"
                          />
                        </div>
                        <div class="form-group">
                          <label for="disableinput">Disable Input</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter Input"
                            disabled
                          />
                        </div>
                        <div class="form-group" name="grnder">
                          <label>Gender</label><br />
                          <div class="d-flex">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="gender"
                                value="Male"
                              />
                              <label
                                class="form-check-label"
                                for="gender"
                              >
                                Male
                              </label>
                            </div>
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="gender"
                                value="Female"
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault2"
                              >
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleFormControlSelect1"
                            >Select District</label
                          >
                          <select
                            class="form-select"
                            name="district"
                          >
                            <option>Agra</option>
                            <option>Aligarh</option>
                            <option>Akbarpur</option>
                            <option>Ayodhya</option>
                            <option>Amroha</option>
                            <option>Auraiya</option>
                            <option>Azamgarh</option>
                            <option>Budaun</option>
                            <option>Baghpat</option>
                            <option>Bahraich</option>
                            <option>Ballia</option>
                            <option>Balrampur</option>
                            <option>Banda</option>
                            <option>Barabanki</option>
                            <option>Bareilly</option>
                            <option>Basti</option>
                            <option>Bijnor</option>
                            <option>Bulandshahr</option>
                            <option>Bhadohi</option>
                            <option>Bahjoi</option>
                            <option>Chitrakoot</option>
                            <option>Chandauli</option>
                            <option>Deoria</option>
                            <option>Etah</option>
                            <option>Etawah</option>
                            <option>Fatehgarh</option>
                            <option>Fatehpur</option>
                            <option>Firozabad</option>
                            <option>Greater Noida</option>
                            <option>Gauriganj</option>
                            <option>Ghazipur</option>
                            <option>Gonda</option>
                            <option>Gorakhpur</option>
                            <option>Hamirpur</option>
                            <option>Hapur</option>
                            <option>Hardoi</option>
                            <option>Hathras</option>
                            <option>Jaunpur</option>
                            <option>Jhansi</option>
                            <option>Kannauj</option>
                            <option>Kanpur</option>
                            <option>Kasganj</option>
                            <option>Kheri</option>
                            <option>Khalilabad</option>
                            <option>Lalitpur</option>
                            <option>Lucknow</option>
                            <option>Maharajganj</option>
                            <option>Mahoba</option>
                            <option>Mainpuri</option>
                            <option>Mathura</option>
                            <option>Mau</option>
                            <option>Manjhanpur</option>
                            <option>Meerut</option>
                            <option>Mirzapur</option>
                            <option>Moradabad</option>
                            <option>Muzaffarnagar</option>
                            <option>Orai</option>
                            <option>Pilibhit</option>
                            <option>Pratapgarh</option>
                            <option>Padarauna</option>
                            <option>Prayagraj</option>
                            <option>Rae Bareli</option>
                            <option>Rampur</option>
                            <option>Saharanpur</option>
                            <option>Shahjahanpur</option>
                            <option>Shamli</option>
                            <option>Shravasti</option>
                            <option>Siddharthnagar</option>
                            <option>Sitapur</option>
                            <option>Sultanpur</option>
                            <option>Robertsganj</option>
                            <option>Unnao</option>
                            <option>Varanasi</option>
                          </select>
                        </div> 
                        <div class="form-group">
                          <label for="comment">Comment</label>
                          <textarea
                            name="comment"
                            class="form-control"
                            placeholder="Enter your comment"
                            rows="6"
                            required
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">Father Name</label>
                          <input
                            type="name"
                            name="father_name"
                            class="form-control"
                            placeholder="Enter your father name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="email2">Mother Name</label>
                          <input
                            type="name"
                            name="mother_name"
                            class="form-control"
                            placeholder="Enter your mother name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="dob">Date of Birth</label>
                          <input
                            type="date"
                            name="dob"
                            class="form-control"
                            placeholder="Enter your date of birth"
                          />
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone Number</label>
                          <input
                            type="tel"
                            name="phone"
                            class="form-control"
                            placeholder="Enter your phone number"
                          />
                        </div>
                        <div class="form-group">
                          <label for="college">College Name</label>
                          <input
                            type="text"
                            name="college"
                            class="form-control"
                            placeholder="Enter your college name"
                          />
                        </div>
                        <div class="form-group">
                          <label class="control-label"> Static </label>
                          <p class="form-control-static">hello@example.com</p>
                        </div>
                        <div class="form-group">
                        <label for="village">Village Name</label>
                        <input
                            type="text"
                            name="village"
                            class="form-control"
                            placeholder="Enter your village name"
                        />
                        </div>
                        <div class="form-group">
                          <label for="hobbies">Hobbies</label>
                          <textarea
                            name="hobbies"
                            class="form-control"
                            placeholder="Enter your hobbies"
                            rows="4"
                            required
                          ></textarea>
                        </div>
                      </div>


                      <div class="col-md-6 col-lg-4">

    <label class="mb-3"><b>Form Group Default</b></label>
    <div class="form-group">
      <label class="form-label">Image Check</label>
      <div class="row">
        <div class="col-6 col-sm-4">
          <label class="imagecheck mb-4">
            <input
              name="imagecheck"
              type="checkbox"
              value="1"
              class="imagecheck-input"
            />
            <figure class="imagecheck-figure">
              <img
                src="{{ asset('../assets/img/examples/product1.jpg') }}"
                alt="title"
                class="imagecheck-image"
              />
            </figure>
          </label>
        </div>
        <div class="col-6 col-sm-4">
          <label class="imagecheck mb-4">
            <input
              name="imagecheck"
              type="checkbox"
              value="2"
              class="imagecheck-input"
              checked=""
            />
            <figure class="imagecheck-figure">
              <img
                src="{{ asset('../assets/img/examples/product4.jpg') }}"
                alt="title"
                class="imagecheck-image"
              />
            </figure>
          </label>
        </div>
        <div class="col-6 col-sm-4">
          <label class="imagecheck mb-4">
            <input
              name="imagecheck"
              type="checkbox"
              value="3"
              class="imagecheck-input"
            />
            <figure class="imagecheck-figure">
              <img
                src="{{ asset('../assets/img/examples/product3.jpg') }}"
                alt="title"
                class="imagecheck-image"
              />
            </figure>
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Color Input</label>
      <div class="row gutters-xs">
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="dark"
              class="colorinput-input"
            />
            <span class="colorinput-color bg-black"></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="primary"
              class="colorinput-input"
            />
            <span
              class="colorinput-color bg-primary"
            ></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="secondary"
              class="colorinput-input"
            />
            <span
              class="colorinput-color bg-secondary"
            ></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="info"
              class="colorinput-input"
            />
            <span class="colorinput-color bg-info"></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="success"
              class="colorinput-input"
            />
            <span
              class="colorinput-color bg-success"
            ></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="danger"
              class="colorinput-input"
            />
            <span class="colorinput-color bg-danger"></span>
          </label>
        </div>
        <div class="col-auto">
          <label class="colorinput">
            <input
              name="color"
              type="checkbox"
              value="warning"
              class="colorinput-input"
            />
            <span
              class="colorinput-color bg-warning"
            ></span>
          </label>
        </div>
      </div>
    </div> 
    <div class="form-group">
      <label class="form-label">Size</label>
      <div class="selectgroup w-100">
        <label class="selectgroup-item">
          <input
            type="radio"
            name="value"
            value="50"
            class="selectgroup-input"
            checked=""
          />
          <span class="selectgroup-button">S</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="value"
            value="100"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">M</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="value"
            value="150"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">L</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="value"
            value="200"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">XL</span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Icons input</label>
      <div class="selectgroup w-100">
        <label class="selectgroup-item">
          <input
            type="radio"
            name="transportation"
            value="2"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="icon-screen-smartphone"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="transportation"
            value="1"
            class="selectgroup-input"
            checked=""
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="icon-screen-tablet"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="transportation"
            value="6"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="icon-screen-desktop"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="transportation"
            value="6"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="fa fa-times"></i
          ></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label d-block">Icon input</label>
      <div
        class="selectgroup selectgroup-secondary selectgroup-pills"
      >
        <label class="selectgroup-item">
          <input
            type="radio"
            name="icon-input"
            value="1"
            class="selectgroup-input"
            checked=""
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="fa fa-sun"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="icon-input"
            value="2"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="fa fa-moon"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="icon-input"
            value="3"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="fa fa-tint"></i
          ></span>
        </label>
        <label class="selectgroup-item">
          <input
            type="radio"
            name="icon-input"
            value="4"
            class="selectgroup-input"
          />
          <span
            class="selectgroup-button selectgroup-button-icon"
            ><i class="fa fa-cloud"></i
          ></span>
        </label>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Your skills</label>
      <div class="selectgroup selectgroup-pills">
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="HTML"
            class="selectgroup-input"
            checked=""
          />
          <span class="selectgroup-button">HTML</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="CSS"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">CSS</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="PHP"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Bootstrap</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="JavaScript"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">JavaScript</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="Ruby"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Jquery</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">React</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Node.js</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Express.js</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="Ruby"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">C Languages</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="Ruby"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Java</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">C++</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">PHP</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Python</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">Laravel</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">MySQL</span>
        </label>
        <label class="selectgroup-item">
          <input
            type="checkbox"
            name="value"
            value="C++"
            class="selectgroup-input"
          />
          <span class="selectgroup-button">MongoDB</span>
        </label>
      </div>
    </div>
  </div>
  <div class="form-check">
      <input
        class="form-check-input"
        type="checkbox"
        value=""
        id="flexCheckDefault"
      />
      <label
        class="form-check-label"
        for="flexCheckDefault"
      >
        Agree with terms and conditions
      </label>
    </div>

</div>

                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
</div>

@endsection
