<div>
    @if(!empty($successMessage))
    <script>
        swal("Mag-ingay!", "{{ $successMessage }}", "success");
    </script>
    @endif

    <div class="stepwizard mb-3">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn {{ $currentStep != 1 ? 'btn-secondary' : 'btn-warning' }}">1</a>
                <p>Step#1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn {{ $currentStep != 2 ? 'btn-secondary' : 'btn-warning' }}" disabled="disabled">2</a>
                <p>Step#2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn {{ $currentStep != 3 ? 'btn-secondary' : 'btn-warning' }}" disabled="disabled">3</a>
                <p>Step#3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn {{ $currentStep != 4 ? 'btn-secondary' : 'btn-warning' }}" disabled="disabled">4</a>
                <p>Step#4</p>
            </div>
        </div>
    </div>

    <div class="row g-3 setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <hr><h4> Step#1 - Personal Information </h4>
        <small> Please enter correct personal information in the fields provided. </small>
        <div class="col-md-6">
            <label for="personalFirstName">First Name</label>
            <input type="text" wire:model="first_name" class="form-control" id="personalFirstName" placeholder="Enter your first name here."/>
            @error('first_name') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="personalLastName">Last Name</label>
            <input type="text" wire:model="last_name" class="form-control" id="personalLastName" placeholder="Enter your last name here."/>
            @error('last_name') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="personalBday">Birthday</label>
            <input type="date" wire:model="bday" class="form-control" id="personalBday" max="2023-01-01" min="1960-01-01"/>
            @error('bday') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="personalAddress">Address</label>
            <input type="text" wire:model="address" class="form-control" id="personalAddress" placeholder="Enter your address here."/>
            @error('address') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-4">
            <label for="personalEmail">E-mail Address</label>
            <input type="email" wire:model="cred_email" class="form-control" id="personalEmail" placeholder="Enter your e-mail address here."/>
            @error('cred_email') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-4">
            <label for="personalFB">Facebook Account</label>
            <input type="text" wire:model="cred_fb" class="form-control" id="personalFB" placeholder="Enter your Facebook profile link here."/>
            @error('cred_fb') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-4">
            <label for="personalCP">Cellphone Number</label>
            <input type="text" wire:model="cred_cp" class="form-control" id="personalCP" placeholder="Enter your cellphone number here." maxlength="13"/>
            @error('cred_cp') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning float-end" type="button" wire:click="firstStepSubmit">Next <i class="fas fa-caret-right text-dark"></i></button>
        </div>
    </div>

    <div class="row g-3 setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <hr><h4> Step#2 - Emcee Information </h4>
        <small> Please enter correct emcee information in the fields provided. </small>
        <div class="col-md-12">
            <label for="emceeAlias">Alias</label>
            <input type="text" wire:model="alias" class="form-control" id="emceeAlias" placeholder="Enter your alias/emcee name here."/>
            @error('alias') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <label for="emceeReppin">Reppin</label>
            <input type="text" wire:model="reppin" class="form-control" id="emceeReppin" placeholder="Enter your reppin/affiliations/groups here."/>
            @error('reppin') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <label for="emceeDivision">Division</label>
            <select class="form-select" id="emceeDivision" wire:model="division">
                <option value="" selected>Select division</option>
                <option value="Metro Manila">Metro Manila</option>
                <option value="Calabarzon">Calabarzon</option>
                <option value="Central Luzon">Central Luzon</option>
                <option value="Visayas">Visayas</option>
                <option value="Mindanao">Mindanao</option>
            </select>
            @error('division') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning float-end" type="button" wire:click="secondStepSubmit">Next <i class="fas fa-caret-right text-dark"></i></button>
            <button class="btn btn-warning float-start" type="button" wire:click="back(1)"><i class="fas fa-caret-left text-dark"></i> Back</button>
        </div>
    </div>

    <div class="row g-3 setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <hr><h4> Step#3 - Lyrics (Song and Battle) </h4>
        <small> Please enter lyrics for song and battle in the fields provided. </small>
        <div class="col-md-6">
            <label for="lyricSong">Lyrics (16 Bars for Song)</label>
            <textarea type="text" rows="10" wire:model="lyric_song" class="form-control" id="lyricSong" placeholder="16 Bars for song, can be same as video links."></textarea>
            @error('lyric_song') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="lyricBattle">Lyrics (16 Bars for Battle)</label>
            <textarea type="text" rows="10" wire:model="lyric_battle" class="form-control" id="lyricBattle" placeholder="16 Bars for imaginary battle of FlipTop Emcee, can be same as video link."></textarea>
            @error('lyric_battle') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="linkSong">Link (Song)</label>
            <input type="text" wire:model="link_song" class="form-control" id="linkSong" placeholder="YouTube/Facebook link only."/>
            @error('link_song') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="linkBattle">Link (Battle)</label>
            <input type="text" wire:model="link_battle" class="form-control" id="linkBattle" placeholder="YouTube/Facebook link only."/>
            @error('link_battle') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <label for="linkOthers">Link (Past Music & Battles)</label>
            <textarea type="text" rows="5" wire:model="link_others" class="form-control" id="linkOthers" placeholder="Enter links of past music/battles here. YouTube/Facebook link only."></textarea>
            @error('link_others') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning float-end" type="button" wire:click="thirdStepSubmit">Next <i class="fas fa-caret-right text-dark"></i></button>
            <button class="btn btn-warning float-start" type="button" wire:click="back(2)"><i class="fas fa-caret-left text-dark"></i> Back</button>
        </div>
    </div>
    
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="col-md-12 text-break">
            <hr><h4> Step#4 - Review details </h4>
            <p> Please review your details before submitting. </p>

            <h5 class="mt-5"> 1. Personal Information </h5>
            <table class="table table-borderless">
                <tr>
                    <td>First Name:</td>
                    <td><strong>{{ $first_name }}</strong></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><strong>{{ $last_name }}</strong></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><strong>{{ $bday }}</strong></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><strong>{{ $address }}</strong></td>
                </tr>
                <tr>
                    <td>E-mail Address:</td>
                    <td><strong>{{ $cred_email }}</strong></td>
                </tr>
                <tr>
                    <td>Facebook Account:</td>
                    <td><strong>{{ $cred_fb }}</strong></td>
                </tr>
                <tr>
                    <td>Cellphone No.:</td>
                    <td><strong>{{ $cred_cp }}</strong></td>
                </tr>
            </table>

            <hr><h5> 2. Emcee Information </h5>
            <table class="table table-borderless">
                <tr>
                    <td>Alias:</td>
                    <td><strong>{{ $alias }}</strong></td>
                </tr>
                <tr>
                    <td>Reppin:</td>
                    <td><strong>{{ $reppin }}</strong></td>
                </tr>
                <tr>
                    <td>Division:</td>
                    <td><strong>{{ $division }}</strong></td>
                </tr>
            </table>

            <hr><h5> 3. Lyrics (Song and Battle) </h5>
            <div class="row my-3">
                <div class="col-md-6">
                    <p> Lyrics (Song): </p>
                    <strong><?php echo nl2br($lyric_song); ?></strong><hr class="d-md-none">
                </div>
                <div class="col-md-6">
                    <p> Lyrics (Battle): </p>
                    <strong><?php echo nl2br($lyric_battle); ?></strong>
                </div>
            </div>

            <table class="table table-borderless">
                <tr>
                    <td>Link (Song):</td>
                    <td><strong>{{ $link_song }}</strong></td>
                </tr>
                <tr>
                    <td>Link (Battle):</td>
                    <td><strong>{{ $link_battle }}</strong></td>
                </tr>
                <tr>
                    <td>Link (Past Music & Battles):</td>
                    <td><strong><?php echo nl2br($link_others); ?></strong></td>
                </tr>
            </table><hr>
            
            <button class="btn btn-success float-end" wire:click="submitForm" type="button"><i class="fas fa-check-square"></i> Submit application</button>
            <button class="btn btn-warning float-start" type="button" wire:click="back(3)"><i class="fas fa-caret-left text-dark"></i> Back</button>
        </div>
    </div>

</div>