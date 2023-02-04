<div>
    @if(!empty($successMessage))
    <div class="alert alert-success">
    {{ $successMessage }}
    </div>
    @endif
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn {{ $currentStep != 1 ? 'btn-secondary' : 'btn-warning' }}">1</a>
                <p>Step#1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn {{ $currentStep != 2 ? 'btn-secondary' : 'btn-warning' }}">2</a>
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
        <small> Insert short ass disclaimer here. </small>
        <div class="col-md-6">
            <label for="personalFirstN">First Name</label>
            <input type="text" wire:model="first_name" class="form-control" id="personalFirstN" placeholder="Enter your first name here."/>
            @error('first_name') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="personalLastName">Last Name</label>
            <input type="text" wire:model="last_name" class="form-control" id="personalLastN" placeholder="Enter your last name here."/>
            @error('last_name') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="personalBday">Birthday</label>
            <input type="date" wire:model="bday" class="form-control" id="personalBday"/>
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
            <input type="text" wire:model="cred_fb" class="form-control" id="personalFB" placeholder="Enter your Facebook account link here."/>
            @error('cred_fb') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-4">
            <label for="personalCP">Cellphone Number</label>
            <input type="text" wire:model="cred_cp" class="form-control" id="personalCP" placeholder="Enter your cellphone number here."/>
            @error('cred_cp') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning nextBtn float-end" type="button" wire:click="firstStepSubmit">Next</button>
        </div>
    </div>

    <div class="row g-3 setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <hr><h4> Step#2 - Emcee Information </h4>
        <small> Insert short ass disclaimer here. </small>
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
            <input type="text" wire:model="division" class="form-control" id="emceeDivision"/>
            @error('division') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning nextBtn float-end" type="button" wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-warning nextBtn float-start" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>

    <div class="row g-3 setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <hr><h4> Step#3 - Lyrics (Song and Battle) </h4>
        <small> Insert short ass disclaimer here. </small>
        <div class="col-md-6">
            <label for="lyricSong">Lyrics (16 Bars for Song)</label>
            <textarea type="text" rows="10" wire:model="lyric_song" class="form-control" id="lyricSong">{{{ $lyric_song ?? '' }}}</textarea>
            @error('lyric_song') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="lyricBattle">Lyrics (16 Bars for Battle)</label>
            <textarea type="text" rows="10" wire:model="lyric_battle" class="form-control" id="lyricBattle">{{{ $lyric_battle ?? '' }}}</textarea>
            @error('lyric_battle') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="linkSong">Link (Song)</label>
            <input type="text" wire:model="link_song" class="form-control" id="linkSong"/>
            @error('link_song') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-6">
            <label for="linkBattle">Link (Battle)</label>
            <input type="text" wire:model="link_battle" class="form-control" id="linkBattle"/>
            @error('link_battle') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <label for="linkOthers">Link (Others)</label>
            <textarea type="text" rows="5" wire:model="link_others" class="form-control" id="linkOthers">{{{ $link_others ?? '' }}}</textarea>
            @error('link_others') <div class="alert alert-danger mt-3"> {{ $message }} </div> @enderror
        </div>
        <div class="col-md-12">
            <button class="btn btn-warning nextBtn float-end" type="button" wire:click="thirdStepSubmit">Next</button>
            <button class="btn btn-warning nextBtn float-start" type="button" wire:click="back(2)">Back</button>
        </div>
    </div>
    
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="col-md-12">
            <h3> Step 4 - Review details </h3>
            <p> Please review your details before submitting. </p>

            <h5> Personal Information </h5>
            <table class="table">
                <tr>
                    <td>First Name:</td>
                    <td><strong>{{$first_name}}</strong></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><strong>{{$last_name}}</strong></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><strong>{{$bday}}</strong></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><strong>{{$address}}</strong></td>
                </tr>
                <tr>
                    <td>E-mail Address:</td>
                    <td><strong>{{$cred_email}}</strong></td>
                </tr>
                <tr>
                    <td>Facebook Profile Link:</td>
                    <td><strong>{{$cred_fb}}</strong></td>
                </tr>
                <tr>
                    <td>Cellphone No.:</td>
                    <td><strong>{{$cred_cp}}</strong></td>
                </tr>
            </table>

            <h5> Emcee Information </h5>
            <table class="table">
                <tr>
                    <td>Alias:</td>
                    <td><strong>{{$alias}}</strong></td>
                </tr>
                <tr>
                    <td>Reppin:</td>
                    <td><strong>{{$reppin}}</strong></td>
                </tr>
                <tr>
                    <td>Division:</td>
                    <td><strong>{{$division}}</strong></td>
                </tr>
            </table>

            <h5> Lyrics (Song and Battle) </h5>
            <table class="table">
                <tr>
                    <td>Lyrics (Song):</td>
                    <td><strong>{{$lyric_song}}</strong></td>
                </tr>
                <tr>
                    <td>Lyrics (Battle):</td>
                    <td><strong>{{$lyric_battle}}</strong></td>
                </tr>
                <tr>
                    <td>Link (Song):</td>
                    <td><strong>{{$link_song}}</strong></td>
                </tr>
                <tr>
                    <td>Link (Battle):</td>
                    <td><strong>{{$link_battle}}</strong></td>
                </tr>
                <tr>
                    <td>Link (Others):</td>
                    <td><strong>{{$link_others}}</strong></td>
                </tr>
            </table>
            
            <button class="btn btn-warning float-end" wire:click="submitForm" type="button">Submit application</button>
            <button class="btn btn-warning nextBtn float-start" type="button" wire:click="back(3)">Back</button>
        </div>
    </div>

</div>