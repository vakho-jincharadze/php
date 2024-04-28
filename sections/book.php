  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post" action="./sections/appointment.php">
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">პაციენტის სახელი და გვარი</label>
                <input name="PatientName" type="text" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">ექიმი</label>
                <select name="DoctorName" class="form-control wide" id="inputDoctorName">
                  <option value="Doctor 1">ექიმი 1 </option>
                  <option value="Doctor 2">ექიმი 2 </option>
                  <option value="Doctor 3">ექიმი 3 </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">განყოფილება</label>
                <select name="DepartmentName" class="form-control wide" id="inputDepartmentName">
                  <option value="Department 1">განყოფილება 1 </option>
                  <option value="Department 2">განყოფილება 2 </option>
                  <option value="Department 3">განყოფილება 3 </option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">ტელეფონის ნომერი</label>
                <input name="Phone" type="number" class="form-control" id="inputPhone" placeholder="0123456789">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">სიმპტომები</label>
                <input name="Symptoms" type="text" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">აირჩიეთ თარიღი </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input name="Date" type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">თანხმობა</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>