 $(document).ready(function() {
    var msg="";
    var elements = document.getElementsByTagName("INPUT");

    for (var i = 0; i < elements.length; i++) {
       elements[i].oninvalid =function(e) {
            if (!e.target.validity.valid) {
                switch(e.target.id) {
                    case 'txtName' : 
                        this.setCustomValidity("Nhập vào tên loại tin"); break;
                    case 'txtTitle':
                        this.setCustomValidity("Nhập vào tiêu đề bài viết"); break;
                    case 'txtSource':
                        this.setCustomValidity("Nhập vào nguồn trang"); break;
                    case 'txtKeyWords':
                        this.setCustomValidity("Nhập vào keywords"); break;
                    
                    default : this.setCustomValidity("");break;
                }
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity(msg);
        };
    } 
});