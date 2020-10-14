<?php require_once('./expenseHeader.php');?>
<body>
       
<div class="container">
    <h2>Tool Calculator</h2>
    <div class="body m-3 card" style="padding:10px">
        <div class="text-center">
            <p class="lead">Calculator</p>
            </div>
            <div class="input my-2">
                <input type="text" name="writespace" readonly class="form-control form-control-lg" id="writespace">
            </div>
            <div class="past">
                <small>Result : </small><small id="past-val">0</small>
            </div>
            <div class="input my-2">
                <input type="text" value="0" name="printspace" class="form-control form-control-sm" readonly id="printspace">
            </div>
            <div class="buttons">
            <table style="width:100%">
                    <tr>
                        <td><button class="btn btn-outline-primary w-100">1</button></td>
                        <td><button class="btn btn-outline-primary w-100">2</button></td>
                        <td><button class="btn btn-outline-primary w-100">3</button></td>
                        <td>
                            <div class="btn-group w-100">
                                    <button class="btn btn-primary w-100">+</button>
                                    <button class="btn btn-outline-info w-100">-</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-outline-primary w-100">4</button></td>
                        <td><button class="btn btn-outline-primary w-100">5</button></td>
                        <td><button class="btn btn-outline-primary w-100">6</button></td>
                        <td>
                            <div class="btn-group w-100">
                                    <button class="btn btn-primary w-100">x</button>
                                    <button class="btn btn-outline-info w-100">/</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-outline-primary w-100">7</button></td>
                        <td><button class="btn btn-outline-primary w-100">8</button></td>
                        <td><button class="btn btn-outline-primary w-100">9</button></td>
                        <td>
                            <div class="btn-group w-100">
                                    <button class="btn btn-primary w-100">(</button>
                                    <button class="btn btn-outline-info w-100">)</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-outline-primary w-100">0</button></td>
                        <td><button class="btn btn-outline-danger w-100" >C</button></td>
                        <td>
                            <button class="btn btn-outline-success w-100">=</button>
                        </td>
                        <td>
                                <div class="btn-group w-100">
                                        <button class="btn btn-primary w-100" >^</button>
                                        <button class="btn btn-outline-info w-100" >Ans</button>
                                </div>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script>
    var current_val, collector;
    $(function(ready){
        $("input#writespace").on("change",function(){
            $("input#writespace").val(eval($("input#writespace").val()));
        });
    })

    $("button").click(function(){
        current_val = $(this).html();

        if(current_val == "Ans"){
            current_val = collector;
        }

        if(current_val=="C"){
            $("input#writespace").val("");
        }
        else if(current_val == "^"){
            $("input#writespace").val($("input#writespace").val() + "**");
        }
        else if(current_val == "x"){
            $("input#writespace").val($("input#writespace").val() + "*");
        }
        else if(current_val=="="){
            $("input#printspace").val(eval($("input#writespace").val()));
        }
        else{
            $("input#writespace").val($("input#writespace").val() + current_val);
        }

        if(current_val in "1234567890)".split("")){
            $("input#printspace").val(eval($("input#writespace").val()));
            collector = $("input#printspace").val();
            $("#past-val").html($("input#writespace").val());
        }

        

    });
</script>

    </body>
</html>
