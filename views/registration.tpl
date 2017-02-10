{extends file="layout.tpl"}
{block name=title}My Page Title{/block}
{block name=body}
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="/register" method="POST">
                    <div class="form-group"><h2>Registration</h2></div>
                    <div class="form-group">
                        <label for="name">Name:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                   <div class="form-group">
                        <label for="last_name">Last name:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                    </div> 
                    <div class="form-group">
                        <label for="city">City:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="homepage">Homepage:</label>
                        <input type="homepage" class="form-control" id="homepage" name="homepage" placeholder="Homepage">
                    </div>
                    <div class="form-group">
                        <label for="affiliation">Affiliation:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="affiliation" class="form-control" id="affiliation" name="affiliation" placeholder="Affiliation" required>
                    </div>
                    <div class="form-group">
                        <label for="affiliation_home">Address of Affiliation:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="affiliation_home" class="form-control" id="affiliation_home" name="affiliation_home" placeholder="Address of Affiliation" required>
                    </div>
                    <div class="from-group">
                        <label for="status">Status:<span style="color:red"><font size="4">*</font></span></label>
                        <select type="status" class="form-control" id="status" name="status" placeholder="Status" required>
                            <option value="professor">Professor</option>
                            <option value="lecturer">Lecturer</option>
                            <option value="postdoctoral_researcher">Postdoctoral Researcher</option>
                            <option value="phd_student">PhD. Student</option>
                            <option value="undergraduate_student">Undergraduate Student</option>
                            <option value="graduate_student">Graduate Student</option>
                            <option value="other_professional">Other Professional</option>
                        </select>
                    </div></br>
                    <div class="from-group">
                        <label for="talk">Do you want to give a talk? <span style="color:red"><font size="4">*</font></span></label>
                        <select type="talk" class="form-control" id="talk" name="talk" placeholder="Talk" required>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div></br>
                    <div class="form-group">
                        <label for="title_of_talk">Title and abstract of your talk:</label>
                        <input type="title_of_talk" class="form-control" id="title_of_talk" name="title_of_talk" placeholder="This can be given later">
                    </div>
                    <div class="form-group">
                        <label for="date_arrival">Date of arrival:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="date_arrival" class="form-control" id="date_arrival" name="date_arrival" placeholder="Date of arrival" required>
                    </div>
                    <div class="form-group">
                        <label for="date_departure">Date of departure:<span style="color:red"><font size="4">*</font></span></label>
                        <input type="date_departure" class="form-control" id="date_departure" name="date_departure" placeholder="Date of departure" required>
                    </div>
                    <div class="from-group">
                        <label for="dinner">Do you want to participate in the conference dinner? <span style="color:red"><font size="4">*</font></span></label>
                        <select type="dinner" class="form-control" id="dinner" name="dinner" placeholder="Dinner" required>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div></br>
                    <div class="from-group">
                        <label for="accom">Do you want to apply for the accommodation at the Guesthouse? <span style="color:red"><font size="4">*</font></span></label>
                        <select type="accom" class="form-control" id="accom" name="accom" placeholder="Accommodation" required>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div></br>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>

{/block}
