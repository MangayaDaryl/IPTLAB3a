$(()=>{
    $("#btnSubmit").click(()=>{
    $("#btnSubmit").hide();

    $.post($("index")("instruction")("quiz")("result").attr("action"),
    $("#step1 :inout").serializeArray(),
    (data)=>{
        $("#msg").show().html(data);
        $("#btnSubmit").show();
        return false;
    })
    $("#index").submit(()=>{
        return false;
});
});
});
   