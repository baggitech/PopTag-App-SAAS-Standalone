  <!-- Content -->
  <div id="content" class="py-4">
    <div class="container">
      <div class="row"> 
        
        <!-- Left Panel -->
        <aside class="col-lg-3">

          <?php require_once(__DIR__.'/../partials/aside.php'); ?>

        </aside>
        <!-- Left Panel End --> 
        
        <!-- Middle Panel -->
        <div class="col-lg-9">

          <!-- ------------------- START ----------------- -->
          <!-- Personal Details -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Personal Details<a href="#edit-personal-details" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name:</p>
              <p class="col-sm-9 text-3">Smith Rhodes</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth:</p>
              <p class="col-sm-9 text-3">12-09-1982</p>
            </div>
            <div class="row gx-3 align-items-baseline">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Address:</p>
              <p class="col-sm-9 text-3">4th Floor, Plot No.22, Above Public Park,<br>
                San Ditego, California - 22434,<br>
                United States.</p>
            </div>
          </div>
          <!-- Edit Details Modal -->
          <div id="edit-personal-details" class="modal fade " role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-400">Personal Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <form id="personaldetails" method="post">
                    <div class="row g-3">
                      <div class="col-12 col-sm-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" value="Smith" class="form-control" data-bv-field="firstName" id="firstName" required placeholder="First Name">
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" value="Rhodes" class="form-control" data-bv-field="lastName" id="lastName" required placeholder="Last Name">
                      </div>
                      <div class="col-12">
                        <label for="birthDate" class="form-label">Date of Birth</label>
                        <div class="icon-group">
                          <input id="birthDate" value="12-09-1982" type="text" class="form-control" required placeholder="Date of Birth">
                          <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span> </div>
                      </div>
                    </div>
                    <h3 class="text-5 fw-400 mt-4">Address</h3>
                    <hr>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" value="4th Floor, Plot No.22, Above Public Park" class="form-control" data-bv-field="address" id="address" required placeholder="Address 1">
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="city" class="form-label">City</label>
                        <input id="city" value="San Ditego" type="text" class="form-control" required placeholder="City">
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="input-zone" class="form-label">State</label>
                        <select class="form-select" id="input-zone" name="zone_id">
                          <option value=""> --- Please Select --- </option>
                          <option value="3613">Alabama</option>
                          <option value="3614">Alaska</option>
                          <option value="3615">American Samoa</option>
                          <option value="3616">Arizona</option>
                          <option value="3617">Arkansas</option>
                          <option value="3618">Armed Forces Africa</option>
                          <option value="3619">Armed Forces Americas</option>
                          <option value="3620">Armed Forces Canada</option>
                          <option value="3621">Armed Forces Europe</option>
                          <option value="3622">Armed Forces Middle East</option>
                          <option value="3623">Armed Forces Pacific</option>
                          <option selected="selected" value="3624">California</option>
                          <option value="3625">Colorado</option>
                          <option value="3626">Connecticut</option>
                          <option value="3627">Delaware</option>
                          <option value="3628">District of Columbia</option>
                          <option value="3629">Federated States Of Micronesia</option>
                          <option value="3630">Florida</option>
                          <option value="3631">Georgia</option>
                          <option value="3632">Guam</option>
                          <option value="3633">Hawaii</option>
                          <option value="3634">Idaho</option>
                          <option value="3635">Illinois</option>
                          <option value="3636">Indiana</option>
                          <option value="3637">Iowa</option>
                          <option value="3638">Kansas</option>
                          <option value="3639">Kentucky</option>
                          <option value="3640">Louisiana</option>
                          <option value="3641">Maine</option>
                          <option value="3642">Marshall Islands</option>
                          <option value="3643">Maryland</option>
                          <option value="3644">Massachusetts</option>
                          <option value="3645">Michigan</option>
                          <option value="3646">Minnesota</option>
                          <option value="3647">Mississippi</option>
                          <option value="3648">Missouri</option>
                          <option value="3649">Montana</option>
                          <option value="3650">Nebraska</option>
                          <option value="3651">Nevada</option>
                          <option value="3652">New Hampshire</option>
                          <option value="3653">New Jersey</option>
                          <option value="3654">New Mexico</option>
                          <option value="3655">New York</option>
                          <option value="3656">North Carolina</option>
                          <option value="3657">North Dakota</option>
                          <option value="3658">Northern Mariana Islands</option>
                          <option value="3659">Ohio</option>
                          <option value="3660">Oklahoma</option>
                          <option value="3661">Oregon</option>
                          <option value="3662">Palau</option>
                          <option value="3663">Pennsylvania</option>
                          <option value="3664">Puerto Rico</option>
                          <option value="3665">Rhode Island</option>
                          <option value="3666">South Carolina</option>
                          <option value="3667">South Dakota</option>
                          <option value="3668">Tennessee</option>
                          <option value="3669">Texas</option>
                          <option value="3670">Utah</option>
                          <option value="3671">Vermont</option>
                          <option value="3672">Virgin Islands</option>
                          <option value="3673">Virginia</option>
                          <option value="3674">Washington</option>
                          <option value="3675">West Virginia</option>
                          <option value="3676">Wisconsin</option>
                          <option value="3677">Wyoming</option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="zipCode" class="form-label">Zip Code</label>
                        <input id="zipCode" value="22434" type="text" class="form-control" required placeholder="City">
                      </div>
                      <div class="col-12 col-sm-6">
                        <label for="inputCountry" class="form-label">Country</label>
                        <select class="form-select" id="inputCountry" name="country_id">
                          <option value=""> --- Please Select --- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                          <option value="3">Algeria</option>
                          <option value="4">American Samoa</option>
                          <option value="5">Andorra</option>
                          <option value="6">Angola</option>
                          <option value="7">Anguilla</option>
                          <option value="8">Antarctica</option>
                          <option value="9">Antigua and Barbuda</option>
                          <option value="10">Argentina</option>
                          <option value="11">Armenia</option>
                          <option value="12">Aruba</option>
                          <option value="252">Ascension Island (British)</option>
                          <option value="13">Australia</option>
                          <option value="14">Austria</option>
                          <option value="15">Azerbaijan</option>
                          <option value="16">Bahamas</option>
                          <option value="17">Bahrain</option>
                          <option value="18">Bangladesh</option>
                          <option value="19">Barbados</option>
                          <option value="20">Belarus</option>
                          <option value="21">Belgium</option>
                          <option value="22">Belize</option>
                          <option value="23">Benin</option>
                          <option value="24">Bermuda</option>
                          <option value="25">Bhutan</option>
                          <option value="26">Bolivia</option>
                          <option value="245">Bonaire, Sint Eustatius and Saba</option>
                          <option value="27">Bosnia and Herzegovina</option>
                          <option value="28">Botswana</option>
                          <option value="29">Bouvet Island</option>
                          <option value="30">Brazil</option>
                          <option value="31">British Indian Ocean Territory</option>
                          <option value="32">Brunei Darussalam</option>
                          <option value="33">Bulgaria</option>
                          <option value="34">Burkina Faso</option>
                          <option value="35">Burundi</option>
                          <option value="36">Cambodia</option>
                          <option value="37">Cameroon</option>
                          <option value="38">Canada</option>
                          <option value="251">Canary Islands</option>
                          <option value="39">Cape Verde</option>
                          <option value="40">Cayman Islands</option>
                          <option value="41">Central African Republic</option>
                          <option value="42">Chad</option>
                          <option value="43">Chile</option>
                          <option value="44">China</option>
                          <option value="45">Christmas Island</option>
                          <option value="46">Cocos (Keeling) Islands</option>
                          <option value="47">Colombia</option>
                          <option value="48">Comoros</option>
                          <option value="49">Congo</option>
                          <option value="50">Cook Islands</option>
                          <option value="51">Costa Rica</option>
                          <option value="52">Cote D'Ivoire</option>
                          <option value="53">Croatia</option>
                          <option value="54">Cuba</option>
                          <option value="246">Curacao</option>
                          <option value="55">Cyprus</option>
                          <option value="56">Czech Republic</option>
                          <option value="237">Democratic Republic of Congo</option>
                          <option value="57">Denmark</option>
                          <option value="58">Djibouti</option>
                          <option value="59">Dominica</option>
                          <option value="60">Dominican Republic</option>
                          <option value="61">East Timor</option>
                          <option value="62">Ecuador</option>
                          <option value="63">Egypt</option>
                          <option value="64">El Salvador</option>
                          <option value="65">Equatorial Guinea</option>
                          <option value="66">Eritrea</option>
                          <option value="67">Estonia</option>
                          <option value="68">Ethiopia</option>
                          <option value="69">Falkland Islands (Malvinas)</option>
                          <option value="70">Faroe Islands</option>
                          <option value="71">Fiji</option>
                          <option value="72">Finland</option>
                          <option value="74">France, Metropolitan</option>
                          <option value="75">French Guiana</option>
                          <option value="76">French Polynesia</option>
                          <option value="77">French Southern Territories</option>
                          <option value="126">FYROM</option>
                          <option value="78">Gabon</option>
                          <option value="79">Gambia</option>
                          <option value="80">Georgia</option>
                          <option value="81">Germany</option>
                          <option value="82">Ghana</option>
                          <option value="83">Gibraltar</option>
                          <option value="84">Greece</option>
                          <option value="85">Greenland</option>
                          <option value="86">Grenada</option>
                          <option value="87">Guadeloupe</option>
                          <option value="88">Guam</option>
                          <option value="89">Guatemala</option>
                          <option value="256">Guernsey</option>
                          <option value="90">Guinea</option>
                          <option value="91">Guinea-Bissau</option>
                          <option value="92">Guyana</option>
                          <option value="93">Haiti</option>
                          <option value="94">Heard and Mc Donald Islands</option>
                          <option value="95">Honduras</option>
                          <option value="96">Hong Kong</option>
                          <option value="97">Hungary</option>
                          <option value="98">Iceland</option>
                          <option value="99">India</option>
                          <option value="100">Indonesia</option>
                          <option value="101">Iran (Islamic Republic of)</option>
                          <option value="102">Iraq</option>
                          <option value="103">Ireland</option>
                          <option value="254">Isle of Man</option>
                          <option value="104">Israel</option>
                          <option value="105">Italy</option>
                          <option value="106">Jamaica</option>
                          <option value="107">Japan</option>
                          <option value="257">Jersey</option>
                          <option value="108">Jordan</option>
                          <option value="109">Kazakhstan</option>
                          <option value="110">Kenya</option>
                          <option value="111">Kiribati</option>
                          <option value="113">Korea, Republic of</option>
                          <option value="253">Kosovo, Republic of</option>
                          <option value="114">Kuwait</option>
                          <option value="115">Kyrgyzstan</option>
                          <option value="116">Lao People's Democratic Republic</option>
                          <option value="117">Latvia</option>
                          <option value="118">Lebanon</option>
                          <option value="119">Lesotho</option>
                          <option value="120">Liberia</option>
                          <option value="121">Libyan Arab Jamahiriya</option>
                          <option value="122">Liechtenstein</option>
                          <option value="123">Lithuania</option>
                          <option value="124">Luxembourg</option>
                          <option value="125">Macau</option>
                          <option value="127">Madagascar</option>
                          <option value="128">Malawi</option>
                          <option value="129">Malaysia</option>
                          <option value="130">Maldives</option>
                          <option value="131">Mali</option>
                          <option value="132">Malta</option>
                          <option value="133">Marshall Islands</option>
                          <option value="134">Martinique</option>
                          <option value="135">Mauritania</option>
                          <option value="136">Mauritius</option>
                          <option value="137">Mayotte</option>
                          <option value="138">Mexico</option>
                          <option value="139">Micronesia, Federated States of</option>
                          <option value="140">Moldova, Republic of</option>
                          <option value="141">Monaco</option>
                          <option value="142">Mongolia</option>
                          <option value="242">Montenegro</option>
                          <option value="143">Montserrat</option>
                          <option value="144">Morocco</option>
                          <option value="145">Mozambique</option>
                          <option value="146">Myanmar</option>
                          <option value="147">Namibia</option>
                          <option value="148">Nauru</option>
                          <option value="149">Nepal</option>
                          <option value="150">Netherlands</option>
                          <option value="151">Netherlands Antilles</option>
                          <option value="152">New Caledonia</option>
                          <option value="153">New Zealand</option>
                          <option value="154">Nicaragua</option>
                          <option value="155">Niger</option>
                          <option value="156">Nigeria</option>
                          <option value="157">Niue</option>
                          <option value="158">Norfolk Island</option>
                          <option value="112">North Korea</option>
                          <option value="159">Northern Mariana Islands</option>
                          <option value="160">Norway</option>
                          <option value="161">Oman</option>
                          <option value="162">Pakistan</option>
                          <option value="163">Palau</option>
                          <option value="247">Palestinian Territory, Occupied</option>
                          <option value="164">Panama</option>
                          <option value="165">Papua New Guinea</option>
                          <option value="166">Paraguay</option>
                          <option value="167">Peru</option>
                          <option value="168">Philippines</option>
                          <option value="169">Pitcairn</option>
                          <option value="170">Poland</option>
                          <option value="171">Portugal</option>
                          <option value="172">Puerto Rico</option>
                          <option value="173">Qatar</option>
                          <option value="174">Reunion</option>
                          <option value="175">Romania</option>
                          <option value="176">Russian Federation</option>
                          <option value="177">Rwanda</option>
                          <option value="178">Saint Kitts and Nevis</option>
                          <option value="179">Saint Lucia</option>
                          <option value="180">Saint Vincent and the Grenadines</option>
                          <option value="181">Samoa</option>
                          <option value="182">San Marino</option>
                          <option value="183">Sao Tome and Principe</option>
                          <option value="184">Saudi Arabia</option>
                          <option value="185">Senegal</option>
                          <option value="243">Serbia</option>
                          <option value="186">Seychelles</option>
                          <option value="187">Sierra Leone</option>
                          <option value="188">Singapore</option>
                          <option value="189">Slovak Republic</option>
                          <option value="190">Slovenia</option>
                          <option value="191">Solomon Islands</option>
                          <option value="192">Somalia</option>
                          <option value="193">South Africa</option>
                          <option value="194">South Georgia &amp; South Sandwich Islands</option>
                          <option value="248">South Sudan</option>
                          <option value="195">Spain</option>
                          <option value="196">Sri Lanka</option>
                          <option value="249">St. Barthelemy</option>
                          <option value="197">St. Helena</option>
                          <option value="250">St. Martin (French part)</option>
                          <option value="198">St. Pierre and Miquelon</option>
                          <option value="199">Sudan</option>
                          <option value="200">Suriname</option>
                          <option value="201">Svalbard and Jan Mayen Islands</option>
                          <option value="202">Swaziland</option>
                          <option value="203">Sweden</option>
                          <option value="204">Switzerland</option>
                          <option value="205">Syrian Arab Republic</option>
                          <option value="206">Taiwan</option>
                          <option value="207">Tajikistan</option>
                          <option value="208">Tanzania, United Republic of</option>
                          <option value="209">Thailand</option>
                          <option value="210">Togo</option>
                          <option value="211">Tokelau</option>
                          <option value="212">Tonga</option>
                          <option value="213">Trinidad and Tobago</option>
                          <option value="255">Tristan da Cunha</option>
                          <option value="214">Tunisia</option>
                          <option value="215">Turkey</option>
                          <option value="216">Turkmenistan</option>
                          <option value="217">Turks and Caicos Islands</option>
                          <option value="218">Tuvalu</option>
                          <option value="219">Uganda</option>
                          <option value="220">Ukraine</option>
                          <option value="221">United Arab Emirates</option>
                          <option value="222">United Kingdom</option>
                          <option selected="selected" value="223">United States</option>
                          <option value="224">United States Minor Outlying Islands</option>
                          <option value="225">Uruguay</option>
                          <option value="226">Uzbekistan</option>
                          <option value="227">Vanuatu</option>
                          <option value="228">Vatican City State (Holy See)</option>
                          <option value="229">Venezuela</option>
                          <option value="230">Viet Nam</option>
                          <option value="231">Virgin Islands (British)</option>
                          <option value="232">Virgin Islands (U.S.)</option>
                          <option value="233">Wallis and Futuna Islands</option>
                          <option value="234">Western Sahara</option>
                          <option value="235">Yemen</option>
                          <option value="238">Zambia</option>
                          <option value="239">Zimbabwe</option>
                        </select>
                      </div>
                      <div class="col-12 mt-4 d-grid">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Personal Details End -->
          <!-- ------------------- END------------------- -->


          <!-- ------------------- START ----------------- -->
          <!-- Personal Details -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Profile Details<a href="#edit-profile-details" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Username:</p>
              <p class="col-sm-9 text-3">SmithRhodes</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Custom URL:</p>
              <p class="col-sm-9 text-3">/smithrhodes</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Your site:</p>
              <p class="col-sm-9 text-3">www.smithrhodes.com</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Your Bio:</p>
              <p class="col-sm-9 text-3">Hello, I am Smith Rhodes, a Art Designer based on California...</p>
            </div>
          </div>
          <!-- Edit Details Modal -->
          <div id="edit-profile-details" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-400">Profile Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <form id="profiledetails" method="post">
                    <div class="mb-4">
                      <label for="firstUsername" class="form-label">Username</label>
                      <input type="text" value="SmithRhodes" class="form-control" data-bv-field="firstUsername" id="firstUsername" required placeholder="Your Username">
                    </div>
                    <div class="mb-4">
                      <label for="customURL" class="form-label">Custom URL</label>
                      <div class="input-group"> <span class="input-group-text">www.Metovo.com/</span>
                        <input id="customURL" value="smithrhodes" type="text" class="form-control" required placeholder="Your Custom URL">
                      </div>
                    </div>
                    <div class="mb-4">
                      <label for="yourSite" class="form-label">Your Site</label>
                      <input type="text" value="www.smithrhodes.com" class="form-control" data-bv-field="yourSite" id="yourSite" required placeholder="Your Site">
                    </div>
                    <div class="mb-4">
                      <label for="yourBio" class="form-label">Your Bio</label>
                      <textarea class="form-control" rows="4" id="yourBio" placeholder="Your Bio...." >Hello, I am Smith Rhodes, a Art Designer based on California...</textarea>
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Personal Details End -->
          <!-- ------------------- END------------------- -->


          <!-- ------------------- START ----------------- -->
          <!-- Email Addresses -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Email Addresses<a href="#edit-email" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID:</p>
              <p class="col-sm-9 text-3 d-sm-inline-flex d-md-flex align-items-center">smithrhodes1982@gmail.com<span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID:</p>
              <p class="col-sm-9 text-3">smith.rhodes@outlook.com</p>
            </div>
          </div>
          <!-- Edit Details Modal -->
          <div id="edit-email" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-400">Email Addresses</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <form id="emailAddresses" method="post">
                    <div class="mb-3">
                      <label for="emailID" class="form-label d-inline-flex align-items-center">Email ID <span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></label>
                      <input type="text" value="smithrhodes1982@gmail.com" class="form-control" data-bv-field="emailid" id="emailID" required placeholder="Email ID">
                    </div>
                    <div class="mb-3">
                      <label for="emailID2" class="form-label">Email ID 2 - <a class="btn-link text-uppercase text-1" href="#">Make Primary</a></label>
                      <div class="input-group">
                        <input type="text" value="smith.rhodes@outlook.com" class="form-control" data-bv-field="emailid2" id="emailID2" required placeholder="Email ID">
                        <a href="" data-bs-toggle="tooltip" title="Remove" class="input-group-text text-muted text-2"><i class="fas fa-times"></i></a> </div>
                    </div>
                    <a class="btn-link text-uppercase d-flex align-items-center text-1 float-end mb-3" href="#"><span class="text-3 me-1"><i class="fas fa-plus-circle"></i></span>Add another email</a>
                    <div class="d-grid w-100">
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Email Addresses End -->
          <!-- ------------------- END------------------- -->


          <!-- ------------------- START ----------------- -->
          <!-- Phone -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Phone<a href="#edit-phone" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile:</p>
              <p class="col-sm-9 text-3 align-items-center d-sm-inline-flex d-md-flex">+1 202-555-0125<span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile:</p>
              <p class="col-sm-9 text-3">+1 303-666-0512</p>
            </div>
          </div>
          <!-- Edit Details Modal -->
          <div id="edit-phone" class="modal fade " role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-400">Phone</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <form id="phone" method="post">
                    <div class="mb-3">
                      <label for="mobileNumber" class="form-label d-inline-flex align-items-center">Mobile <span class="badge bg-info text-1 fw-500 rounded-pill px-2 py-1 ms-2">Primary</span></label>
                      <div class="input-group">
                        <div class="input-group-text p-0">
                          <select class="form-select border-0 bg-transparent" id="selectedCountry" name="selectedCountry">
                            <option value="AD,376">AD +376</option>
                            <option value="AE,971">AE +971</option>
                            <option value="AF,93">AF +93</option>
                            <option value="AG,1">AG +1</option>
                            <option value="AI,1">AI +1</option>
                            <option value="AL,355">AL +355</option>
                            <option value="AM,374">AM +374</option>
                            <option value="AN,599">AN +599</option>
                            <option value="AO,244">AO +244</option>
                            <option value="AR,54">AR +54</option>
                            <option value="AS,1">AS +1</option>
                            <option value="AT,43">AT +43</option>
                            <option value="AU,61">AU +61</option>
                            <option value="AW,297">AW +297</option>
                            <option value="AX,358">AX +358</option>
                            <option value="AZ,994">AZ +994</option>
                            <option value="BA,387">BA +387</option>
                            <option value="BB,1">BB +1</option>
                            <option value="BD,880">BD +880</option>
                            <option value="BE,32">BE +32</option>
                            <option value="BF,226">BF +226</option>
                            <option value="BG,359">BG +359</option>
                            <option value="BH,973">BH +973</option>
                            <option value="BI,257">BI +257</option>
                            <option value="BJ,229">BJ +229</option>
                            <option value="BL,590">BL +590</option>
                            <option value="BM,1">BM +1</option>
                            <option value="BN,673">BN +673</option>
                            <option value="BO,591">BO +591</option>
                            <option value="BQ,599">BQ +599</option>
                            <option value="BR,55">BR +55</option>
                            <option value="BS,1">BS +1</option>
                            <option value="BT,975">BT +975</option>
                            <option value="BW,267">BW +267</option>
                            <option value="BY,375">BY +375</option>
                            <option value="BZ,501">BZ +501</option>
                            <option value="CA,1">CA +1</option>
                            <option value="CC,61">CC +61</option>
                            <option value="CD,243">CD +243</option>
                            <option value="CF,236">CF +236</option>
                            <option value="CG,242">CG +242</option>
                            <option value="CH,41">CH +41</option>
                            <option value="CI,225">CI +225</option>
                            <option value="CK,682">CK +682</option>
                            <option value="CL,56">CL +56</option>
                            <option value="CM,237">CM +237</option>
                            <option value="CN,86">CN +86</option>
                            <option value="CO,57">CO +57</option>
                            <option value="CR,506">CR +506</option>
                            <option value="CU,53">CU +53</option>
                            <option value="CV,238">CV +238</option>
                            <option value="CW,599">CW +599</option>
                            <option value="CY,357">CY +357</option>
                            <option value="CZ,420">CZ +420</option>
                            <option value="DE,49">DE +49</option>
                            <option value="DJ,253">DJ +253</option>
                            <option value="DK,45">DK +45</option>
                            <option value="DM,1">DM +1</option>
                            <option value="DO,1">DO +1</option>
                            <option value="DZ,213">DZ +213</option>
                            <option value="EC,593">EC +593</option>
                            <option value="EE,372">EE +372</option>
                            <option value="EG,20">EG +20</option>
                            <option value="ER,291">ER +291</option>
                            <option value="ES,34">ES +34</option>
                            <option value="ET,251">ET +251</option>
                            <option value="FI,358">FI +358</option>
                            <option value="FJ,679">FJ +679</option>
                            <option value="FK,500">FK +500</option>
                            <option value="FM,691">FM +691</option>
                            <option value="FO,298">FO +298</option>
                            <option value="FR,33">FR +33</option>
                            <option value="GA,241">GA +241</option>
                            <option value="GB,44">GB +44</option>
                            <option value="GD,1">GD +1</option>
                            <option value="GE,995">GE +995</option>
                            <option value="GF,594">GF +594</option>
                            <option value="GG,44">GG +44</option>
                            <option value="GH,233">GH +233</option>
                            <option value="GI,350">GI +350</option>
                            <option value="GL,299">GL +299</option>
                            <option value="GM,220">GM +220</option>
                            <option value="GN,224">GN +224</option>
                            <option value="GP,590">GP +590</option>
                            <option value="GQ,240">GQ +240</option>
                            <option value="GR,30">GR +30</option>
                            <option value="GT,502">GT +502</option>
                            <option value="GU,1">GU +1</option>
                            <option value="GW,245">GW +245</option>
                            <option value="GY,592">GY +592</option>
                            <option value="HK,852">HK +852</option>
                            <option value="HN,504">HN +504</option>
                            <option value="HR,385">HR +385</option>
                            <option value="HT,509">HT +509</option>
                            <option value="HU,36">HU +36</option>
                            <option value="ID,62">ID +62</option>
                            <option value="IE,353">IE +353</option>
                            <option value="IL,972">IL +972</option>
                            <option value="IM,44">IM +44</option>
                            <option value="IN,91">IN +91</option>
                            <option value="IO,246">IO +246</option>
                            <option value="IQ,964">IQ +964</option>
                            <option value="IR,98">IR +98</option>
                            <option value="IS,354">IS +354</option>
                            <option value="IT,39">IT +39</option>
                            <option value="JE,44">JE +44</option>
                            <option value="JM,1">JM +1</option>
                            <option value="JO,962">JO +962</option>
                            <option value="JP,81">JP +81</option>
                            <option value="KE,254">KE +254</option>
                            <option value="KG,996">KG +996</option>
                            <option value="KH,855">KH +855</option>
                            <option value="KI,686">KI +686</option>
                            <option value="KM,269">KM +269</option>
                            <option value="KN,1">KN +1</option>
                            <option value="KP,850">KP +850</option>
                            <option value="KR,82">KR +82</option>
                            <option value="KW,965">KW +965</option>
                            <option value="KY,1">KY +1</option>
                            <option value="KZ,7">KZ +7</option>
                            <option value="LA,856">LA +856</option>
                            <option value="LB,961">LB +961</option>
                            <option value="LC,1">LC +1</option>
                            <option value="LI,423">LI +423</option>
                            <option value="LK,94">LK +94</option>
                            <option value="LR,231">LR +231</option>
                            <option value="LS,266">LS +266</option>
                            <option value="LT,370">LT +370</option>
                            <option value="LU,352">LU +352</option>
                            <option value="LV,371">LV +371</option>
                            <option value="LY,218">LY +218</option>
                            <option value="MA,212">MA +212</option>
                            <option value="MC,377">MC +377</option>
                            <option value="MD,373">MD +373</option>
                            <option value="ME,382">ME +382</option>
                            <option value="MF,590">MF +590</option>
                            <option value="MG,261">MG +261</option>
                            <option value="MH,692">MH +692</option>
                            <option value="MK,389">MK +389</option>
                            <option value="ML,223">ML +223</option>
                            <option value="MM,95">MM +95</option>
                            <option value="MN,976">MN +976</option>
                            <option value="MO,853">MO +853</option>
                            <option value="MP,1">MP +1</option>
                            <option value="MQ,596">MQ +596</option>
                            <option value="MR,222">MR +222</option>
                            <option value="MS,1">MS +1</option>
                            <option value="MT,356">MT +356</option>
                            <option value="MU,230">MU +230</option>
                            <option value="MV,960">MV +960</option>
                            <option value="MW,265">MW +265</option>
                            <option value="MX,52">MX +52</option>
                            <option value="MY,60">MY +60</option>
                            <option value="MZ,258">MZ +258</option>
                            <option value="NA,264">NA +264</option>
                            <option value="NC,687">NC +687</option>
                            <option value="NE,227">NE +227</option>
                            <option value="NF,672">NF +672</option>
                            <option value="NG,234">NG +234</option>
                            <option value="NI,505">NI +505</option>
                            <option value="NL,31">NL +31</option>
                            <option value="NO,47">NO +47</option>
                            <option value="NP,977">NP +977</option>
                            <option value="NR,674">NR +674</option>
                            <option value="NU,683">NU +683</option>
                            <option value="NZ,64">NZ +64</option>
                            <option value="OM,968">OM +968</option>
                            <option value="PA,507">PA +507</option>
                            <option value="PE,51">PE +51</option>
                            <option value="PF,689">PF +689</option>
                            <option value="PG,675">PG +675</option>
                            <option value="PH,63">PH +63</option>
                            <option value="PK,92">PK +92</option>
                            <option value="PL,48">PL +48</option>
                            <option value="PM,508">PM +508</option>
                            <option value="PN,64">PN +64</option>
                            <option value="PR,1">PR +1</option>
                            <option value="PS,970">PS +970</option>
                            <option value="PT,351">PT +351</option>
                            <option value="PW,680">PW +680</option>
                            <option value="PY,595">PY +595</option>
                            <option value="QA,974">QA +974</option>
                            <option value="RE,262">RE +262</option>
                            <option value="RO,40">RO +40</option>
                            <option value="RS,381">RS +381</option>
                            <option value="RU,7">RU +7</option>
                            <option value="RW,250">RW +250</option>
                            <option value="SA,966">SA +966</option>
                            <option value="SB,677">SB +677</option>
                            <option value="SC,248">SC +248</option>
                            <option value="SD,249">SD +249</option>
                            <option value="SE,46">SE +46</option>
                            <option value="SG,65">SG +65</option>
                            <option value="SH,290">SH +290</option>
                            <option value="SI,386">SI +386</option>
                            <option value="SJ,47">SJ +47</option>
                            <option value="SK,421">SK +421</option>
                            <option value="SL,232">SL +232</option>
                            <option value="SM,378">SM +378</option>
                            <option value="SN,221">SN +221</option>
                            <option value="SO,252">SO +252</option>
                            <option value="SR,597">SR +597</option>
                            <option value="SS,211">SS +211</option>
                            <option value="ST,239">ST +239</option>
                            <option value="SV,503">SV +503</option>
                            <option value="SX,1">SX +1</option>
                            <option value="SY,963">SY +963</option>
                            <option value="SZ,268">SZ +268</option>
                            <option value="TC,1">TC +1</option>
                            <option value="TD,235">TD +235</option>
                            <option value="TG,228">TG +228</option>
                            <option value="TH,66">TH +66</option>
                            <option value="TJ,992">TJ +992</option>
                            <option value="TK,690">TK +690</option>
                            <option value="TL,670">TL +670</option>
                            <option value="TM,993">TM +993</option>
                            <option value="TN,216">TN +216</option>
                            <option value="TO,676">TO +676</option>
                            <option value="TR,90">TR +90</option>
                            <option value="TT,1">TT +1</option>
                            <option value="TV,688">TV +688</option>
                            <option value="TW,886">TW +886</option>
                            <option value="TZ,255">TZ +255</option>
                            <option value="UA,380">UA +380</option>
                            <option value="UG,256">UG +256</option>
                            <option value="US,1">US +1</option>
                            <option value="UY,598">UY +598</option>
                            <option value="UZ,998">UZ +998</option>
                            <option value="VA,39">VA +39</option>
                            <option value="VC,1">VC +1</option>
                            <option value="VE,58">VE +58</option>
                            <option value="VG,1">VG +1</option>
                            <option value="VI,1">VI +1</option>
                            <option value="VN,84">VN +84</option>
                            <option value="VU,678">VU +678</option>
                            <option value="WF,681">WF +681</option>
                            <option value="WS,685">WS +685</option>
                            <option value="YE,967">YE +967</option>
                            <option value="YT,262">YT +262</option>
                            <option value="ZA,27">ZA +27</option>
                            <option value="ZM,260">ZM +260</option>
                            <option value="ZW,263">ZW +263</option>
                          </select>
                        </div>
                        <input type="text" value="2025550125" class="form-control" data-bv-field="mobilenumber" id="mobileNumber" required placeholder="Mobile Number">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="mobileNumber2" class="form-label">Mobile 2 - <a class="btn-link text-uppercase text-1" href="#">Make Primary</a></label>
                      <div class="input-group">
                        <div class="input-group-text p-0">
                          <select class="form-select border-0 bg-transparent" id="selectedCountry2" name="selectedCountry">
                            <option value="AD,376">AD +376</option>
                            <option value="AE,971">AE +971</option>
                            <option value="AF,93">AF +93</option>
                            <option value="AG,1">AG +1</option>
                            <option value="AI,1">AI +1</option>
                            <option value="AL,355">AL +355</option>
                            <option value="AM,374">AM +374</option>
                            <option value="AN,599">AN +599</option>
                            <option value="AO,244">AO +244</option>
                            <option value="AR,54">AR +54</option>
                            <option value="AS,1">AS +1</option>
                            <option value="AT,43">AT +43</option>
                            <option value="AU,61">AU +61</option>
                            <option value="AW,297">AW +297</option>
                            <option value="AX,358">AX +358</option>
                            <option value="AZ,994">AZ +994</option>
                            <option value="BA,387">BA +387</option>
                            <option value="BB,1">BB +1</option>
                            <option value="BD,880">BD +880</option>
                            <option value="BE,32">BE +32</option>
                            <option value="BF,226">BF +226</option>
                            <option value="BG,359">BG +359</option>
                            <option value="BH,973">BH +973</option>
                            <option value="BI,257">BI +257</option>
                            <option value="BJ,229">BJ +229</option>
                            <option value="BL,590">BL +590</option>
                            <option value="BM,1">BM +1</option>
                            <option value="BN,673">BN +673</option>
                            <option value="BO,591">BO +591</option>
                            <option value="BQ,599">BQ +599</option>
                            <option value="BR,55">BR +55</option>
                            <option value="BS,1">BS +1</option>
                            <option value="BT,975">BT +975</option>
                            <option value="BW,267">BW +267</option>
                            <option value="BY,375">BY +375</option>
                            <option value="BZ,501">BZ +501</option>
                            <option value="CA,1">CA +1</option>
                            <option value="CC,61">CC +61</option>
                            <option value="CD,243">CD +243</option>
                            <option value="CF,236">CF +236</option>
                            <option value="CG,242">CG +242</option>
                            <option value="CH,41">CH +41</option>
                            <option value="CI,225">CI +225</option>
                            <option value="CK,682">CK +682</option>
                            <option value="CL,56">CL +56</option>
                            <option value="CM,237">CM +237</option>
                            <option value="CN,86">CN +86</option>
                            <option value="CO,57">CO +57</option>
                            <option value="CR,506">CR +506</option>
                            <option value="CU,53">CU +53</option>
                            <option value="CV,238">CV +238</option>
                            <option value="CW,599">CW +599</option>
                            <option value="CY,357">CY +357</option>
                            <option value="CZ,420">CZ +420</option>
                            <option value="DE,49">DE +49</option>
                            <option value="DJ,253">DJ +253</option>
                            <option value="DK,45">DK +45</option>
                            <option value="DM,1">DM +1</option>
                            <option value="DO,1">DO +1</option>
                            <option value="DZ,213">DZ +213</option>
                            <option value="EC,593">EC +593</option>
                            <option value="EE,372">EE +372</option>
                            <option value="EG,20">EG +20</option>
                            <option value="ER,291">ER +291</option>
                            <option value="ES,34">ES +34</option>
                            <option value="ET,251">ET +251</option>
                            <option value="FI,358">FI +358</option>
                            <option value="FJ,679">FJ +679</option>
                            <option value="FK,500">FK +500</option>
                            <option value="FM,691">FM +691</option>
                            <option value="FO,298">FO +298</option>
                            <option value="FR,33">FR +33</option>
                            <option value="GA,241">GA +241</option>
                            <option value="GB,44">GB +44</option>
                            <option value="GD,1">GD +1</option>
                            <option value="GE,995">GE +995</option>
                            <option value="GF,594">GF +594</option>
                            <option value="GG,44">GG +44</option>
                            <option value="GH,233">GH +233</option>
                            <option value="GI,350">GI +350</option>
                            <option value="GL,299">GL +299</option>
                            <option value="GM,220">GM +220</option>
                            <option value="GN,224">GN +224</option>
                            <option value="GP,590">GP +590</option>
                            <option value="GQ,240">GQ +240</option>
                            <option value="GR,30">GR +30</option>
                            <option value="GT,502">GT +502</option>
                            <option value="GU,1">GU +1</option>
                            <option value="GW,245">GW +245</option>
                            <option value="GY,592">GY +592</option>
                            <option value="HK,852">HK +852</option>
                            <option value="HN,504">HN +504</option>
                            <option value="HR,385">HR +385</option>
                            <option value="HT,509">HT +509</option>
                            <option value="HU,36">HU +36</option>
                            <option value="ID,62">ID +62</option>
                            <option value="IE,353">IE +353</option>
                            <option value="IL,972">IL +972</option>
                            <option value="IM,44">IM +44</option>
                            <option value="IN,91">IN +91</option>
                            <option value="IO,246">IO +246</option>
                            <option value="IQ,964">IQ +964</option>
                            <option value="IR,98">IR +98</option>
                            <option value="IS,354">IS +354</option>
                            <option value="IT,39">IT +39</option>
                            <option value="JE,44">JE +44</option>
                            <option value="JM,1">JM +1</option>
                            <option value="JO,962">JO +962</option>
                            <option value="JP,81">JP +81</option>
                            <option value="KE,254">KE +254</option>
                            <option value="KG,996">KG +996</option>
                            <option value="KH,855">KH +855</option>
                            <option value="KI,686">KI +686</option>
                            <option value="KM,269">KM +269</option>
                            <option value="KN,1">KN +1</option>
                            <option value="KP,850">KP +850</option>
                            <option value="KR,82">KR +82</option>
                            <option value="KW,965">KW +965</option>
                            <option value="KY,1">KY +1</option>
                            <option value="KZ,7">KZ +7</option>
                            <option value="LA,856">LA +856</option>
                            <option value="LB,961">LB +961</option>
                            <option value="LC,1">LC +1</option>
                            <option value="LI,423">LI +423</option>
                            <option value="LK,94">LK +94</option>
                            <option value="LR,231">LR +231</option>
                            <option value="LS,266">LS +266</option>
                            <option value="LT,370">LT +370</option>
                            <option value="LU,352">LU +352</option>
                            <option value="LV,371">LV +371</option>
                            <option value="LY,218">LY +218</option>
                            <option value="MA,212">MA +212</option>
                            <option value="MC,377">MC +377</option>
                            <option value="MD,373">MD +373</option>
                            <option value="ME,382">ME +382</option>
                            <option value="MF,590">MF +590</option>
                            <option value="MG,261">MG +261</option>
                            <option value="MH,692">MH +692</option>
                            <option value="MK,389">MK +389</option>
                            <option value="ML,223">ML +223</option>
                            <option value="MM,95">MM +95</option>
                            <option value="MN,976">MN +976</option>
                            <option value="MO,853">MO +853</option>
                            <option value="MP,1">MP +1</option>
                            <option value="MQ,596">MQ +596</option>
                            <option value="MR,222">MR +222</option>
                            <option value="MS,1">MS +1</option>
                            <option value="MT,356">MT +356</option>
                            <option value="MU,230">MU +230</option>
                            <option value="MV,960">MV +960</option>
                            <option value="MW,265">MW +265</option>
                            <option value="MX,52">MX +52</option>
                            <option value="MY,60">MY +60</option>
                            <option value="MZ,258">MZ +258</option>
                            <option value="NA,264">NA +264</option>
                            <option value="NC,687">NC +687</option>
                            <option value="NE,227">NE +227</option>
                            <option value="NF,672">NF +672</option>
                            <option value="NG,234">NG +234</option>
                            <option value="NI,505">NI +505</option>
                            <option value="NL,31">NL +31</option>
                            <option value="NO,47">NO +47</option>
                            <option value="NP,977">NP +977</option>
                            <option value="NR,674">NR +674</option>
                            <option value="NU,683">NU +683</option>
                            <option value="NZ,64">NZ +64</option>
                            <option value="OM,968">OM +968</option>
                            <option value="PA,507">PA +507</option>
                            <option value="PE,51">PE +51</option>
                            <option value="PF,689">PF +689</option>
                            <option value="PG,675">PG +675</option>
                            <option value="PH,63">PH +63</option>
                            <option value="PK,92">PK +92</option>
                            <option value="PL,48">PL +48</option>
                            <option value="PM,508">PM +508</option>
                            <option value="PN,64">PN +64</option>
                            <option value="PR,1">PR +1</option>
                            <option value="PS,970">PS +970</option>
                            <option value="PT,351">PT +351</option>
                            <option value="PW,680">PW +680</option>
                            <option value="PY,595">PY +595</option>
                            <option value="QA,974">QA +974</option>
                            <option value="RE,262">RE +262</option>
                            <option value="RO,40">RO +40</option>
                            <option value="RS,381">RS +381</option>
                            <option value="RU,7">RU +7</option>
                            <option value="RW,250">RW +250</option>
                            <option value="SA,966">SA +966</option>
                            <option value="SB,677">SB +677</option>
                            <option value="SC,248">SC +248</option>
                            <option value="SD,249">SD +249</option>
                            <option value="SE,46">SE +46</option>
                            <option value="SG,65">SG +65</option>
                            <option value="SH,290">SH +290</option>
                            <option value="SI,386">SI +386</option>
                            <option value="SJ,47">SJ +47</option>
                            <option value="SK,421">SK +421</option>
                            <option value="SL,232">SL +232</option>
                            <option value="SM,378">SM +378</option>
                            <option value="SN,221">SN +221</option>
                            <option value="SO,252">SO +252</option>
                            <option value="SR,597">SR +597</option>
                            <option value="SS,211">SS +211</option>
                            <option value="ST,239">ST +239</option>
                            <option value="SV,503">SV +503</option>
                            <option value="SX,1">SX +1</option>
                            <option value="SY,963">SY +963</option>
                            <option value="SZ,268">SZ +268</option>
                            <option value="TC,1">TC +1</option>
                            <option value="TD,235">TD +235</option>
                            <option value="TG,228">TG +228</option>
                            <option value="TH,66">TH +66</option>
                            <option value="TJ,992">TJ +992</option>
                            <option value="TK,690">TK +690</option>
                            <option value="TL,670">TL +670</option>
                            <option value="TM,993">TM +993</option>
                            <option value="TN,216">TN +216</option>
                            <option value="TO,676">TO +676</option>
                            <option value="TR,90">TR +90</option>
                            <option value="TT,1">TT +1</option>
                            <option value="TV,688">TV +688</option>
                            <option value="TW,886">TW +886</option>
                            <option value="TZ,255">TZ +255</option>
                            <option value="UA,380">UA +380</option>
                            <option value="UG,256">UG +256</option>
                            <option value="US,1">US +1</option>
                            <option value="UY,598">UY +598</option>
                            <option value="UZ,998">UZ +998</option>
                            <option value="VA,39">VA +39</option>
                            <option value="VC,1">VC +1</option>
                            <option value="VE,58">VE +58</option>
                            <option value="VG,1">VG +1</option>
                            <option value="VI,1">VI +1</option>
                            <option value="VN,84">VN +84</option>
                            <option value="VU,678">VU +678</option>
                            <option value="WF,681">WF +681</option>
                            <option value="WS,685">WS +685</option>
                            <option value="YE,967">YE +967</option>
                            <option value="YT,262">YT +262</option>
                            <option value="ZA,27">ZA +27</option>
                            <option value="ZM,260">ZM +260</option>
                            <option value="ZW,263">ZW +263</option>
                          </select>
                        </div>
                        <input type="text" value="3036660512" class="form-control" data-bv-field="mobilenumber2" id="mobileNumber2" required placeholder="Mobile Number">
                        <a href="" data-bs-toggle="tooltip" title="Remove" class="input-group-text text-2"><i class="fas fa-times"></i></a> </div>
                    </div>
                    <a class="btn-link text-uppercase d-flex align-items-center text-1 float-end mb-3" href="#"><span class="text-3 me-1"><i class="fas fa-plus-circle"></i></span>Add another Phone</a>
                    <div class="d-grid w-100">
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Phone End -->
          <!-- ------------------- END------------------- -->


          <!-- ------------------- START ----------------- -->
          <!-- Account Settings -->
          <div class="bg-white shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Account Settings<a href="#edit-account-settings" data-bs-toggle="modal" class="ms-auto text-2 text-uppercase btn-link"><span class="me-1"><i class="fas fa-edit"></i></span>Edit</a></h3>
            <hr class="mx-n4 mb-4">
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Language:</p>
              <p class="col-sm-9 text-3">English (United States)</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Time Zone:</p>
              <p class="col-sm-9 text-3">(GMT-06:00) Central America</p>
            </div>
            <div class="row gx-3 align-items-center">
              <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Account Status:</p>
              <p class="col-sm-9 text-3"><span class="bg-success text-white rounded-pill d-inline-block px-2 mb-0"><i class="fas fa-check-circle"></i> Active</span></p>
            </div>
          </div>
          <!-- Edit Details Modal -->
          <div id="edit-account-settings" class="modal fade " role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-400">Account Settings</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <form id="accountSettings" method="post">
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="language" class="form-label">Language</label>
                        <select class="form-select" id="language" name="language_id">
                          <option value="1">English (United States)</option>
                          <option value="2">Spanish </option>
                          <option value="3">Chinese</option>
                          <option value="4">Russian</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label for="input-timezone" class="form-label">Time Zone</label>
                        <select class="form-select" id="input-timezone" name="timezone_id">
                          <option value="-12">(GMT-12:00) International Date Line West</option>
                          <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                          <option value="-10">(GMT-10:00) Hawaii</option>
                          <option value="-9">(GMT-09:00) Alaska</option>
                          <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                          <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                          <option value="-7">(GMT-07:00) Arizona</option>
                          <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                          <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                          <option selected="selected" value="-6">(GMT-06:00) Central America</option>
                          <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                          <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                          <option value="-6">(GMT-06:00) Saskatchewan</option>
                          <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                          <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                          <option value="-5">(GMT-05:00) Indiana (East)</option>
                          <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                          <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                          <option value="-4">(GMT-04:00) Manaus</option>
                          <option value="-4">(GMT-04:00) Santiago</option>
                          <option value="-3.5">(GMT-03:30) Newfoundland</option>
                          <option value="-3">(GMT-03:00) Brasilia</option>
                          <option value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                          <option value="-3">(GMT-03:00) Greenland</option>
                          <option value="-3">(GMT-03:00) Montevideo</option>
                          <option value="-2">(GMT-02:00) Mid-Atlantic</option>
                          <option value="-1">(GMT-01:00) Cape Verde Is.</option>
                          <option value="-1">(GMT-01:00) Azores</option>
                          <option value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                          <option value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                          <option value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                          <option value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                          <option value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                          <option value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                          <option value="1">(GMT+01:00) West Central Africa</option>
                          <option value="2">(GMT+02:00) Amman</option>
                          <option value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                          <option value="2">(GMT+02:00) Beirut</option>
                          <option value="2">(GMT+02:00) Cairo</option>
                          <option value="2">(GMT+02:00) Harare, Pretoria</option>
                          <option value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                          <option value="2">(GMT+02:00) Jerusalem</option>
                          <option value="2">(GMT+02:00) Minsk</option>
                          <option value="2">(GMT+02:00) Windhoek</option>
                          <option value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                          <option value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                          <option value="3">(GMT+03:00) Nairobi</option>
                          <option value="3">(GMT+03:00) Tbilisi</option>
                          <option value="3.5">(GMT+03:30) Tehran</option>
                          <option value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                          <option value="4">(GMT+04:00) Baku</option>
                          <option value="4">(GMT+04:00) Yerevan</option>
                          <option value="4.5">(GMT+04:30) Kabul</option>
                          <option value="5">(GMT+05:00) Yekaterinburg</option>
                          <option value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                          <option value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                          <option value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                          <option value="5.75">(GMT+05:45) Kathmandu</option>
                          <option value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                          <option value="6">(GMT+06:00) Astana, Dhaka</option>
                          <option value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                          <option value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                          <option value="7">(GMT+07:00) Krasnoyarsk</option>
                          <option value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                          <option value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                          <option value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                          <option value="8">(GMT+08:00) Perth</option>
                          <option value="8">(GMT+08:00) Taipei</option>
                          <option value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                          <option value="9">(GMT+09:00) Seoul</option>
                          <option value="9">(GMT+09:00) Yakutsk</option>
                          <option value="9.5">(GMT+09:30) Adelaide</option>
                          <option value="9.5">(GMT+09:30) Darwin</option>
                          <option value="10">(GMT+10:00) Brisbane</option>
                          <option value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                          <option value="10">(GMT+10:00) Hobart</option>
                          <option value="10">(GMT+10:00) Guam, Port Moresby</option>
                          <option value="10">(GMT+10:00) Vladivostok</option>
                          <option value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                          <option value="12">(GMT+12:00) Auckland, Wellington</option>
                          <option value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                          <option value="13">(GMT+13:00) Nuku'alofa</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label for="accountStatus" class="form-label">Account Status</label>
                        <select class="form-select" id="accountStatus" name="language_id">
                          <option value="1">Active</option>
                          <option value="2">In Active</option>
                        </select>
                      </div>
                      <div class="col-12 d-grid mt-4">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Account Settings End --> 
          <!-- ------------------- END------------------- -->
          
        </div>
        <!-- Middle Panel End -->

      </div>
    </div>
  </div>
  <!-- Content end -->