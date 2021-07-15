


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center ">
        <h1 class="text-center mb-5 text-uppercase text-muted">Registration System</h1>
        <div class="row">
            
            <div class="col-sm-6 bg-light rounded border py-3 offset-sm-1">
                <h2 class="text-center">Register</h2>

                <form action="register.php" method="POST" enctype="multipart/form-data" >
                        <div class="form-group">
                        <div class="row">
                          <label for="name"  class="col-sm-3 control-label">ชื่อ</label>
                          <div class="col-sm-9">
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="ชื่อ" value="" required>
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                          <label for="name" class="col-sm-3 control-label">นามสกุล</label>
                          <div class="col-sm-9">
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="นามสกุล" value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">ที่อยู่</label>
                          <div class="col-sm-9">
                          <input type="text" name="address" id="address" class="form-control" placeholder="ที่อยู่" value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                          <div class="col-sm-9">
                          <input type="text" name="phone" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์" value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label" >Email</label>
                          <div class="col-sm-9">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">ตำแหน่งงานที่ต้องการสมัคร</label>
                          <div class="col-sm-9">
                          <input type="text" name="position" id="position" class="form-control" placeholder="ตำแหน่งงานที่ต้องการสมัคร " value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">วันที่พร้อมเริ่มงาน </label>
                          <div class="col-sm-9">
                          <input type="text" name="startup" id="startup" class="form-control" placeholder="วันที่พร้อมเริ่มงาน " value="" required>
                          </div>
                        </div></div>
                        <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">UPLoad File </label>
                          <div class="col-sm-9">
                          <input type="file" name="file" id="file" class="form-control"  required="required"/>
                          </div>
                        </div>
                        </div>
                          <div class="alert alert-danger" role="alert"></div>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        
                      
                        
                    </form>

            </div>
        </div>
    </div>
    
  <table class="table" >
    <thead class="table table-dark">
      <tr>
        <td>ลำดับ</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>ที่อยู่</td>
        <td>เบอร์โทรศัพท์</td>
        <td>Email</td>
        <td>ตำแหน่งงานที่ต้องการสมัคร</td>
        <td>วันที่พร้อมเริ่มงาน</td>
        <td>ไฟล์</td>
      </tr>
    </thead>
    <tbody class="table table-hover" id="info">
      
    </tbody>
  </table>
    <script>
        
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText);
                    console.log(data);

                    for (let i = 0; i < data.length; i++) {
                        document.getElementById('info').innerHTML += `
                            <tr>
                                <td>${data[i].id}</td>
                                <td>${data[i].firstname}</td>
                                <td>${data[i].lastname}</td>
                                <td>${data[i].address}</td>
                                <td>${data[i].phone}</td>
                                <td>${data[i].email}</td>
                                <td>${data[i].position}</td>
                                <td>${data[i].startup}</td>
                                <td>${data[i].file}</td>
                                
                            </tr>
                        `;
                    }
                }
            }
        document.getElementById('info').innerHTML = ''; 
        xhttp.open("GET", 'testinfo.php', true);
        xhttp.send();
        
        
    </script>
</body>
</html>