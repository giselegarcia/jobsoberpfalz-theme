
$(document).ready(()=>{

        // -----------Code Filter-Select
        const selectBtn = document.querySelector(".select-btn"),
        items = document.querySelectorAll(".item");

        selectBtn.addEventListener("click",() =>{
            selectBtn.classList.toggle("open");
        })
        items.forEach(item => {
            item.addEventListener("click",() =>{
                item.classList.toggle("checked")
                let checked = document.querySelectorAll(".checked"),
                    btnText= document.querySelector(".btn-text");

                    if(checked && checked.length > 0){
                        btnText.innerText = `${checked.length} Selected Region`
                    }else{
                        btnText.innerText = `${checked.length} Selected Region`
                    }
                })

            })
            // -----------Code Filter-Select-2
        const selectBtn2 = document.querySelector(".select-btn2"),
        items2 = document.querySelectorAll(".item2");

        selectBtn2.addEventListener("click",() =>{
            selectBtn2.classList.toggle("open");
        })
        items2.forEach(item2 => {
            item2.addEventListener("click",() =>{
                item2.classList.toggle("checked")
                let checked = document.querySelectorAll(".checked"),
                    btnText2= document.querySelector(".btn-text2");

                    if(checked && checked.length > 0){
                        btnText2.innerText = `${checked.length} Selected Tipo Emprego`
                    }else{
                        btnText2.innerText = `${checked.length} Selected Tipo Emprego`
                    }
                })

            })
             // -----------Code Filter-Select-3
        const selectBtn3 = document.querySelector(".select-btn3"),
        items3 = document.querySelectorAll(".item3");

        selectBtn3.addEventListener("click",() =>{
            selectBtn3.classList.toggle("open");
        })
        items3.forEach(item3 => {
            item3.addEventListener("click",() =>{
                item3.classList.toggle("checked")
                let checked = document.querySelectorAll(".checked"),
                    btnText3= document.querySelector(".btn-text3");

                    if(checked && checked.length > 0){
                        btnText3.innerText = `${checked.length} Selected Setor`
                    }else{
                        btnText3.innerText = `${checked.length} Selected Setor`
                    }
                })

            })

            
            //-----------end code----------------
            
        //__________________________Carrossel
        






        //_________________________HEADER
        const body = document.querySelector("body"),
          nav = document.querySelector("nav"),
          modeToggle = document.querySelector(".dark-light"),
          searchToggle = document.querySelector(".searchToggle"),
          sidebarOpen = document.querySelector(".sidebarOpen"),
          siderbarClose = document.querySelector(".siderbarClose");

          let getMode = localStorage.getItem("mode");
              if(getMode && getMode === "dark-mode"){
                body.classList.add("dark");
              }

          // js code to toggle dark and light mode
                modeToggle.addEventListener("click" , () =>{
                  modeToggle.classList.toggle("active");
                  body.classList.toggle("dark");

                  // js code to keep user selected mode even page refresh or file reopen
                  if(!body.classList.contains("dark")){
                      localStorage.setItem("mode" , "light-mode");
                  }else{
                      localStorage.setItem("mode" , "dark-mode");
                  }
                });

          // js code to toggle search box
                  if(searchToggle){
                  searchToggle.addEventListener("click" , () =>{
                    searchToggle.classList.toggle("active");
                  });
                }
          
                
          //   js code to toggle sidebar
          sidebarOpen.addEventListener("click" , () =>{
              nav.classList.add("active");
          });

          body.addEventListener("click" , e =>{
              let clickedElm = e.target;

              if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
                  nav.classList.remove("active");
              }
    });

              // Pagination Section List, COL

              // selecting required element
          const element = document.querySelector(".pagination ul");
          let totalPages = 20;
          let page = 10;

          //calling function with passing parameters and adding inside element which is ul tag
          element.innerHTML = createPagination(totalPages, page);
          function createPagination(totalPages, page){
            let liTag = '';
            let active;
            let beforePage = page - 1;
            let afterPage = page + 1;
            if(page > 1){ //show the next button if the page value is greater than 1
              liTag += `<li class="btn prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li>`;
            }

            if(page > 2){ //if page value is less than 2 then add 1 after the previous button
              liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
              if(page > 3){ //if page value is greater than 3 then add this (...) after the first li or page
                liTag += `<li class="dots"><span>...</span></li>`;
              }
            }

            // how many pages or li show before the current li
            if (page == totalPages) {
              beforePage = beforePage - 2;
            } else if (page == totalPages - 1) {
              beforePage = beforePage - 1;
            }
            // how many pages or li show after the current li
            if (page == 1) {
              afterPage = afterPage + 2;
            } else if (page == 2) {
              afterPage  = afterPage + 1;
            }

            for (var plength = beforePage; plength <= afterPage; plength++) {
              if (plength > totalPages) { //if plength is greater than totalPage length then continue
                continue;
              }
              if (plength == 0) { //if plength is 0 than add +1 in plength value
                plength = plength + 1;
              }
              if(page == plength){ //if page is equal to plength than assign active string in the active variable
                active = "active";
              }else{ //else leave empty to the active variable
                active = "";
              }
              liTag += `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
            }

            if(page < totalPages - 1){ //if page value is less than totalPage value by -1 then show the last li or page
              if(page < totalPages - 2){ //if page value is less than totalPage value by -2 then add this (...) before the last li or page
                liTag += `<li class="dots"><span>...</span></li>`;
              }
              liTag += `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
            }

            if (page < totalPages) { //show the next button if the page value is less than totalPage(20)
              liTag += `<li class="btn next" onclick="createPagination(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li>`;
            }
            element.innerHTML = liTag; //add li tag inside ul tag
            return liTag; //reurn the li tag
          }


});