/* html表单验证 （bootstrap插件） */



// .header登录login表单验证
$("#loginForm").bootstrapValidator({
    fields: {
        // 注册的用户名
          loginUsername: {
            //validators:验证器
                validators: {
                    notEmpty: {
                        message: '*用户名不能为空'
                    },
                    stringLength: {
                        min: 6,
                        max: 10,
                        message: '*用户名必须大于6个字符并且小于10个字符'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: '*用户名只能由字母、数字和下划线组成*'
                    }
                }
            },
        // 注册的密码
            loginPassword: {
                validators:{
                    notEmpty :{
                        message : '*密码不能为空'
                    }
                }
            }
    }
})

// guestbook.php文件表单验证
$("#guestbookForm").bootstrapValidator({
     fields: {
        // 注册的用户名
          // guestbookName: {
          //   //validators:验证器
          //       validators: {
          //           notEmpty: {
          //               message: '*姓名不能为空'
          //           },
          //           stringLength: {
          //               min: 6,
          //               max: 10,
          //               message: '*姓名必须大于6个字符并且小于10个字符'
          //           },
          //           regexp: {
          //               regexp: /^[a-zA-Z0-9_]+$/,
          //               message: '*姓名只能由字母、数字和下划线组成*'
          //           }
          //       }
          //   },
       
       // 电子邮箱
            guestbookEmail: {
                validators:{
                    notEmpty :{
                        message : '*电子邮箱不能为空'
                    },
                    emailAddress: {
                        message : '*输入不是有效的电子邮件地址'
                    }
                }
            },
            
        // 留言内容
            guestbookMessage: {
                validators:{
                    notEmpty :{
                        message : '*留言内容不能为空'
                    }
                 },
                 stringLength: {
                        min: 6,
                        max: 40,
                        message: '*字数必须大于6并且小于40个字符'
                    }
            }
    }
})