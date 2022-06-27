// Copy permanent address

function deleteRecord(id) {
    if(confirm("Do you want to delete this record ?")){
        window.location.href = "../../backend/delete_application.php?id="+id;
    }
    return false;
}

function sameAsPermanentAddress(tempBox){
    let p_province_no = document.getElementById('p_province_no').value;
    let p_zone = document.getElementById('p_zone').value;
    let p_district = document.getElementById('p_district').value;
    let p_metro = document.getElementById('p_metro').value;
    let p_ward = document.getElementById('p_ward').value;
    let p_street = document.getElementById('p_street').value;

    let t_province_no = document.getElementById('t_province_no');
    let t_zone = document.getElementById('t_zone');
    let t_district = document.getElementById('t_district');
    let t_metro = document.getElementById('t_metro');
    let t_ward = document.getElementById('t_ward');
    let t_street = document.getElementById('t_street');

    if(tempBox.checked) {
        t_province_no.value = p_province_no;
        t_zone.value = p_zone;
        t_district.value = p_district;
        t_metro.value = p_metro;
        t_ward.value = p_ward;
        t_street.value = p_street;
    }
    else{
        t_province_no.value = 0;
        t_zone.value = "";
        t_district.value = "";
        t_metro.value = "";
        t_ward.value = 0;
        t_street.value = "";
    }
}