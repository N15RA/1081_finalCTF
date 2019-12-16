var abcd = "NIS";
var fuck = false;
var cnt = 10;
for(var i = 10; i < 9487; i++){
    if(i == 1234)
        abcd += "RA{Xss";
    else if(i == 2468)
        abcd += "_is_gr";
    else if(i == 6543)
        abcd += "eat}";
    cnt += 123;
}
var alertFun = window.alert;
window.alert = function(str){
    fuck = true;
    alertFun(str);
};

var cnt = 10;
if( fuck == true ){
    alert(abcd);
}
for(var i = 10; i < 9487; i++)
    cnt += 123;
function fibo(x) {
    if(x == 0 || x == 1) return 1;
    return fibo(x-1) + fibo(x-2);
}
fibo(10);
