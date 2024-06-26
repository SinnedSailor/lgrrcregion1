<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>LGRRC Region 1</title>
    <meta name="description" content="Department of the Interior and Local Government">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/lgrrc.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">
</head>
<header id="nav-menu" aria-label="navigation bar">
  <div class="container">
    <div class="nav-start">
      <a class="logo" href="#home">
        <div class="row">
          <div class="col-4">
          <img src="img/logo/dilg.png" width="46" height="46"/>
          </div>
          <div class="col-4">
          <img src="img/logo/bpilipinas.png" width="45" height="50"/>
          </div>
          <div class="col-4">
          <img src="img/lgrrc.png" width="36" height="50"/>
          </div>
        </div>
      </a>
        <li class="logtitle">
           <div class="break">
            <span class="title-black fs-2">LGRRC 1</span>
          </div>  
        </li>
    </div>
    <div class="nav-end">
    <nav class="menu">
    <div class="break">
        <ul class="menu-bar">
        <li>
            <button class="nav-link dropdown-btn" data-dropdown="dropdown1" aria-haspopup="true" aria-expanded="false" aria-label="discover">
              About
              <i class="bx bx-chevron-down" aria-hidden="true"></i>
            </button>
            <div id="dropdown1" class="dropdown">
             
              <ul role="menu">
                <li>
                  <span class="dropdown-link-title">LGRRC</span>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#history">Brief History</a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#about">About</a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#principles">Key Principles</a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#activities">Activities</a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#research">Research Bank</a>
                </li>
              </ul>
              <ul role="menu">
                <li>
                  <span class="dropdown-link-title">LGRRC Team</span>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#members">LGRRC-1 Members</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <button class="nav-link dropdown-btn" data-dropdown="dropdown2" aria-haspopup="true" aria-expanded="false" aria-label="browse">
              Browse
              <i class="bx bx-chevron-down" aria-hidden="true"></i>
            </button>
            <div id="dropdown2" class="dropdown">
              <ul role="menu">
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region1.dilg.gov.ph/index.php/2016-05-14-15-11-04/annual-reports">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC4ElEQVR4nO3b72sScRwHcKme1Z82IugHQQ/6McqCsXqQT0ZBPQsq6EGwxrYYk36gY/WgtbacUlsr+6HScMtF0dRNN/XOLc/z133fcaZut9vhafrtPL5veD+RQ+7F93ufryhaLHUC4BCAKQBFUMicP/jZ4XDst9AOgIugmDHXHFxe/yJ1LIBrtKH2CbeM/ebxeA6YHmovYwNLAPaZHmqnicV/hlLDwgBQKlgYBCp35mNgsW1YGAjaViwMBq1ggy3HwoDQtmBBGTruntcFlev+9NXXMiwoQ70LId3QKrYjoYQQrMQ2sLyyqruJFG/rOGiTuc6gesNW1FhhW1d32NZtUyJ8Ee6QYO6tuyVKuPA4hq7+CAbmeBBiQmi+RGB7tl5GVnvblYJETAQlAO64Ugqk3MF3vN636AzoqDetQt6YSOhdzc6Avl7KqJCXnXGIBf1K6tAoX2xkgCAQzeHIQFSBPGNfQypTagRJF1qUCE6NrOL06BpGPqSRqHOzYa6Akw9XFcjjQ1H8TBYaRdKFepYFxU3LK3VrOgl/JFceNjuzKUo4XzlGqj38IALvL7EZJF2obdfRsLPWJzE4fVvYyknIFwmujquvfbHwu1kkPWhJAvpneZwYVm7F3T02FEWPI656fXg+rXg/XyqM+Y0ftRakkrGGUb5EMBMS0OtUY7R686X6GOnzPYf1/aNaNwuicY+X7xt53H/D4eigcqru7JWxdYhF9ZjuKGg1mZyEyWAGl54qV1mezkmNyWxMqJRHKTq93fjsnpfJ5+uXsIh7Hg53Z1JYS2v/gG5IKMlxyE511Sq+PYd/DYNqh62o7rCt28QzSrJZkKxQada8z6jQ2w2h5+zf9nYzaB9bUc2wras77BmthA2jPcKm7q6wqasdNnV1h03daggBERPbzXHQCuE5RbUif7bl8kKtRPWFqQG/SqEUBtUdtqIm3LpWGD/WVkAPAnhF6w8+DUa+p0n5HutB/gAKM8OwdGTBiwAAAABJRU5ErkJggg==" class="icon" width="50" height="50" />
                    <div>
                      <span class="dropdown-link-title">Annual Reports</span>
                      <p>LGRRC's Annual Reports</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#books">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB5UlEQVR4nO2VQSsEYRjH5xMo5cbJ3cXRV6A0U3Jwkrg5sEpkI6+QWtmdvdisZWY5YHd2NUZrjZ0JJ+KIchJKFMqKze6jPWyJ2HfbYWbM86v/aaZ3+vU8/3cYpgjdw94KF+G1XuLPuogfvsvN7f0FmIebKRcX8XX8JPh/REf9PShKcKJ/Da4uNdhRgreuGViro5nzMLwcDpWU7OO5/URfjwg8J5pKSvbuGEU/gBOlBleXYEe/BS+jBN66YMvfy9uVCpmzUEnJpa/tJ/qLoCg1OFGCq2sG2FFqsKMEO2oG2FFqsKMEO2oG2FFqsKMEO2oG2FFqsKMEO2rvjro9c8AvxSAoJWBhPfklgqw+ihvqfbGMbZ2kW1OZHE1mN/eozlzeTA0YIjrKC3kREDd2yg7ZOgVOB6oElH3Kc9XyJzowERjMT8wISUuLeuZXw0ZJWlqUD8dlZ4guxVccITojRNodIZonsKrcOkJ0OrhWa5SspUULeBajnV4xKvFiTPmckJQcEeSd/mLpS15GaEV9ysE4zZmCrDYwVoPToItWlE1BDWNXOBQFnKgt4Zy6uqwOD6wGhNVA4jTI/TtRVocnTofJxl2oLDxr1qCO02GlIGxrUVaHNlaDqaYUVP3wTj2nQ7xlG6qN+vA75DgMRrOWPPwAAAAASUVORK5CYII=" class="icon" width="50" height="50"/>
                    <div>
                      <span class="dropdown-link-title">Published Books</span>
                      <p>LGRRC's Published Books</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region1.dilg.gov.ph/index.php/lgrrc-corner/2-uncategorised/195-km-audit-report-and-tools">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAADkElEQVR4nO3YzU/TYBwH8KJXEy8ePXjx6MEYEy8cTDTxP/Af0Hb4mpgYlYAXg8GDJkZjjImJyVqQCcEQVAgvQ2RtBx3DjTHeGeAQGIM4hrzva57CAYG1ZbD2mfab/JIGmvJ88vz6PE9hGJ0AOAKgHsAqTEibP6S4XK7DjNkB4ICJqWxsQ4O3KwTgkNnQIrOhzk/NaPR2hU3FwiKo6VhYCCXV1N7VYwoWFkNNw4IC6CY2uwsUKIGSau747s8aFhRBN7CBzv8C6swWFhRCSbmVgC+noVVNHkNQUi2+oJKzUDnYaxiqYpVgR05CU6kUIhNT6B4cNVzRqfi9nINmmGIbajT2jNIVu3UNx25dumK3ruHYrUtX7NY1HLt16YrduoZjty5dsVvX9NaNLc1jMDGNzvgY/PFxDCVimF1ewD8xowOJaQjD7bjvqwYnCbtWkb8GrogPY8nZ3IOOJuN43tOcFrdbOSQBb/q/YXIxkRvQ1qkBXJPL94TcWje87yFND9MLTQHgh70ZA7fPbu14kE5o7XhQF5BYWcLC6rJa5Frv/tbJAbqggdkf6izoDXw9ReZ9I+Ra737yCozMz9ABXUuto9hfY6gl9wolVRqsV18Ly6Hun32G371MoKT88THroSWBL1mHvur9ai00vpQ09G7uF0q2nMW1Feug3tjInraNTKGk+n5NWgeti4ZMg8qxEeugrojP0CAdGtDb7S5Dz6iPhqyDVo916Q7waahBPfveVap2QMnWkVxdxuu+Vt3nkNXdMqhbZ2t5GXZjZX1NvZd8nWyFkqvfmwsM+fnbAc9+tpgDgT5I9/TgXDTtwJ5016uHCaMh2IcaB4/xBc3PuMKDgOZvTsCOkNm65a3YdWAFchmUmVHD0MpIZ1ok+Z7VOB2RX+XvG0oC4CKAxwBKt1dJ4HNvugFel8sRmIvqIj/qvOsvwm5lt79NzisALjBmxCE7z3Ein9La7LX2wMaJsPZCJPLLnCScZGgIJwkurcGS9ib/L9qelsl+3dWWlYRnDC25IjuPc6IwoTXgOx0f/lpQPNNDBo6PfJhVXEcZmlIgC2c4UUhqDfymtwLvBiV129E/JPBxalp2e1iZP8+JfEwfoduuEYen7DRDczip/AQr8d7MkXwdqwjHmJwIkMdK/GVO5Pv2AOxkxbJLTE4GyLvqcZ7lROERKwpuFS4KC5wkJFiR7+EkoYEVhUJW5E9leyx/AEQ7EXKsyuFLAAAAAElFTkSuQmCC" class="icon" width="50" height="50" />
                    <div>
                      <span class="dropdown-link-title">KM Audit Reports and Tools</span>
                      <p>LGRRC's KM Audit Reports and Tools</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region1.dilg.gov.ph/images/Transparency/MASTERLIST%20LOCAL%20CHIEF%20EXECUTIVES/LIST%20OF%20NEWLY-ELECTED%20LCEs_SEP2023W3.pdf">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA6CAYAAADhu0ooAAAACXBIWXMAAAsTAAALEwEAmpwYAAADOUlEQVR4nO2aX0/TUByGueEL+EH8GN7xIeTCRAKJipqoiAaiiCAKggIa/mxkMUFRYN0Qd6qiBCUgEBFBCEMI0QuckW3t2rV9TTtFts71FPanhT7Je9ddPHlPT3+na1FRBly+QInLy/rcDLvlZlhYIU/IOD4HN7Ad5SDLMgBEALwDUAaguMgMHVNTxW4v6Su0VGrYyTmIcQkZGAdwhFrUxZC2QkulhnkzCUnSGjRihEqyxxc46mZYudBiqfm+FYIJjlG0ydYVWirdfWmSNkNRt5cdKrRYagLvZ82K+mkaHbSe6IxZUXJYli45LJsRMRQ9AI8XelEbDwzmRHea9QVK3AzxuxgSKrRk6ggYjnJQFAVZEd0NgA+wD6Rorzii1oQ4jRrhLF1rQgybcxpFbh8v7Pg0no6MUWcs84mGWLbRhnYPKmtbqdPS1W9NUXl9DbHmeijh8MEVldeD4M6XI1p+HHxdNZRI+OCJysEVcOfKNMm/4euvAvF40nVzCyuYmJ6nzvzSqnVE5dVlcGeTJdWII8PIMSR3ooIAYeARlBifkFz5Aq7ypF4y4M+1ZO5ElWgEfNN1TUTdcKTFT+kln3uRJ0jWRZXtX+CvVemkklJRivjL0XxJ5qhRKY5Ya2NmyVcvYERb7wCqbz2kzgPPcAGWLs9pO2laydcB0GCbx4sS3gZfcyFFklBJ2kpURQn9gNDbidjdBkgzUzCDrUT3gxiPIyaI1FGvt6VoliGOqBFOo9aEGDbnNIr9bUYKxyUG+v/8jdDS/RiXbnZSp71v0HqNKhwHvrFWGyQET3daWds/RxUuCr6hJmk0FDw9Ollbiyrq8S3NDKweAlLfMNhKVFpa+CcZCYO/cUUvea8JEEXdb9WvwCRJos6fr8byLyqOMonDNfMsMeDXXaaWzAEk+6KyrN1zu4W4qjN6yfY7uuVqK1HlZwjcxVMZ3zDEOpq1A3oeIdlvVC11c2Pnva1O8v5tqiZXv25iYXmNOsGNb/kXVZGXFxE9fWLPy9Veu+7H2USzFaUQ+roAieoLEvuJaoiiNiSYxX6ie2Ro9C16+/3U8bET9hTNMsQRNcJp1JoQw+acRuFsRrAguqX7G6ttLM6UQejzAAAAAElFTkSuQmCC" class="icon" width="50" height="50"/>
                    <div>
                      <span class="dropdown-link-title">Masterlist of Region 1 Local Chief Executives</span>
                      <p>Chief Executives of the Region</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region1.dilg.gov.ph/images/Transparency/BOOKS/LGRRC1%20Service%20Offerings.pdf">
                    <img src="data:image/png;base64,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" class="icon" width="50" height="50"/>
                    <div>
                      <span class="dropdown-link-title">LGRRC-1 Compendium of Service Offerings</span>
                      <p></p>
                    </div>
                  </a>
                </li>
              </ul>

              <ul role="menu">
                <li class="dropdown-title">
                  <span class="dropdown-link-title">LGRRC Websites</span>
                </li>
                <div class="row">
                <div class="col-6 col-sm-6">
                <li role="menuitem">
                  <a class="dropdown-link" href="https://lga.gov.ph/public">
                    LGA
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region1.dilg.gov.ph/">
                    Region I
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region2.dilg.gov.ph/">
                    Region II
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region3.dilg.gov.ph/index.php">
                    Region III
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="http://www.mimaropa.dilg.gov.ph/">
                    Region IV-A
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://ncr.dilg.gov.ph/">
                    NCR
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="http://www.region5.dilg.gov.ph/">
                    Region IV-B
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region6.dilg.gov.ph/">
                    Region V
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="http://www.dilgregion7.net/">
                    Region VI
                  </a>
                </li>
                </div>
                <div class="col-6 col-sm-6">
                <li role="menuitem">
                  <a class="dropdown-link" href="http://www.region7.dilg.gov.ph/">
                    Region VII
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region8.dilg.gov.ph/">
                    Region VIII
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region9.dilg.gov.ph/">
                    Region IX
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region10.dilg.gov.ph/">
                    Region X
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region11.dilg.gov.ph/wpv1/">
                    Region XI
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://region12.dilg.gov.ph/">
                    Region XII
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="https://caraga.dilg.gov.ph/main/">
                    Region XIII
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#https://car.dilg.gov.ph/figma">
                    CAR
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#figma">
                    ARMM
                  </a>
                </li>
                </div>
              </ul>
             </div>  
          </li>
          <li><a class="nav-link" href="https://library.region1.dilg.gov.ph">LGRRC 1 Library</a></li>
          <li><a class="nav-link" href="#">LGRRC 1 Official Newsletter</a></li>
          <li><a class="nav-link" href="#msac">MSAC</a></li> 
        </ul>
        </div>
      </nav>



      <!--<div class="right-container">
        <form class="search" role="search">    
          <input type="search" name="search" placeholder="Search" />
          <i class="bx bx-search" aria-hidden="true"></i>
        </form>
      </div>-->

      <button id="hamburger" aria-label="hamburger" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-menu" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</header>
<body>
<script src="./script.js"></script>

<!--This is the Home Page Section-->
<section id="home" class="home mt-5">
<img class="waves img-fluid" src="img/layered-waves-haikei.svg" width="100%"/>
    <div class="row">
    <div class="col-6 p-5">
      <span class="sm-6 title-body mt-1 offset-2 lh-1 text-justify">Welcome to Local</span>
      <span class="sm-6 title-body mt-1 offset-1 lh-1 text-center">Governance Regional</span>
      <span class="sm-6 title-body mt-1 offset-2 lh-1 text-center">Resource Center 1</span>
    </div>
    <div class="col-6">
      <div class="big-logo offset-3">
     <img src="img/lgrrc.png" width="62%" height="60%" />
      </div>
    </div>
  </div>
</section>

<!--This is the Brief History Section-->
<section id="history" class="history">
<div class="d-flex justify-content-center pt-4">
<div class="break">
<span class="title-history fs-2">Brief History</span>
</div>
</div>
<div class="d-flex justify-content-center">
<div class="break">
<p class="content-history text-center fw-light fs-6 px-4">
The Local Governance Resource Center was established in select DILG Regional Offices in 2005 with support from the Canadian International Agency (CIDA). Since then, the Local Goverment Academy had undertaken crucial steps in consolidating and sharing the wealth of knowledge and information on local governance. With the implementation of the "Strengthening Local Governance Resource Centers (LGRCs) as Harmonizing Mechanism for Effective Local Governance in the Philippine Project" (from August 2009 until August 2013) which was supported by the European Commission, the LGRCs were further strengthened and positioned in a more strategic role.</p>
</div>
</div>
<div class="d-flex justify-content-center">
<div class="break">
<p class="content-history text-center fw-light fs-6 px-4">
To date, there are 17 Regional LGRCs nationwide. The LGRCs are continuously undertaking innovations and improvements on human resource development and management; website development; documentation of LGU best practices; knowledge on local economic development, disaster risk reduction and climate change adaptation; information systems and development; LGU profiling; monitoring and evaluation; and acquisition of knowledge products.</p>
</div>
</div>
</section>




<!--This is the Goals Section-->
<section id="about" class="goals pb-5">
<div class="d-flex justify-content-center">
<!--What is the LGRC?-->
<span class="title-goals fs-2">What is the LGRC?</span>
</div>
<div class="break">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
      <p class="content-history text-center fw-bold fs-6 mt-3">
          The Local Governance Resource Center is a unique platform for covergence in local governance.</p>
          <ul class="offset-1" style="list-style-type:disc;">
              <li class="content-history fw-light fs-6 mt-3">LGRC promotes a culture of learning and knowledge sharing in pursuit of excellence in local governance;</li>
              <li class="content-history fw-light fs-6 mt-3">It harnesses the role of DILG as knowledge broker and facilitator of capacity development in local governance;</li>
              <li class="content-history fw-light fs-6 mt-3">It facilitates integration of knowledge management in DILG processes and systems.</li>
          </ul>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
      <p class="content-history text-center fw-bold fs-6 mt-3">
          The Local Governance Resource Center integrates knowledge management, multi-stakeholdership and convergence for LGU capacity development.</p>
          <ul class="offset-1" style="list-style-type:disc;">
              <li class="content-history fw-light fs-6 mt-3">KM is the core process towards excellence in local governance;</li>
              <li class="content-history fw-light fs-6 mt-3">Multi-stakeholdership pursue the principle that there is no monopoly of knowledge should be shared and used;</li>
              <li class="content-history fw-light fs-6 mt-3">Convergence means harmonizing various initiatives in local governance within DILG and beyond.</li>
          </ul>
        </div>
      </div>

<!--LGRC Program Facilities-->
      <div class="d-flex justify-content-center mt-5">
        <span class="title-goals fs-2 mb-5">LGRC Program Facilities</span>
      </div>
      <div class="row px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-5">
            <div class="d-flex justify-content-center">
              <img class="img-fluid" src="img/multimedia.png" style="width:30vw; height:50vh;"/>
            </div>
            <p class="content-history fw-bold text-center fs-4">Multimedia, Knowledge and Information Management</p>
            <p class="content-history fw-light fs-6 text-center">Managed the repository and sharing of information and knowledge products through the LGRRC library and other channels of communication, which serves as repository of local governance knowledge products and information with multimnedia services and ICT support.</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-5">
            <div class="d-flex justify-content-center">
              <img class="img-fluid" src="img/capdev.png" style="width:30vw; height:50vh;"/>
            </div>
            <p class="content-history fw-bold text-center fs-4">Capacity Development</p>
            <p class="content-history fw-light fs-6 text-center">Provides the venue to deliver and facilitate efficient delivery of quality, strategic and responsive capacity development.</p> 
        </div>
      </div>

      <div class="row px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-5">
            <div class="d-flex justify-content-center">
              <img class="img-fluid" src="img/linkage.png" style="width:30vw; height:50vh;"/>
            </div>
            <p class="content-history fw-bold text-center fs-4">Linkage</p>
            <p class="content-history fw-light fs-6 text-center">Facilitates partnerships and networking among LGUs and other local governance stakeholders and access to networks of communities of practices.</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 px-5">
            <div class="d-flex justify-content-center">
              <img class="img-fluid" src="img/publiceduc.png" style="width:30vw; height:50vh;"/>
            </div>
            <p class="content-history fw-bold text-center fs-4">Public Education and Citizenship Development</p>
            <p class="content-history fw-light fs-6 text-center">Promotes good local governance pratices and innovations among the general public.</p> 
        </div>
      </div>
</div>
      
      

<!--LGRRC Vision, Mission and Goals-->
<div class="d-flex justify-content-center mt-4">
<span class="title-goals fs-2">LGRRC Vision, Mission and Goals</span>
</div>
  <div class="row offset-1 d-flex justify-content-center my-3">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
      <div class="card goal-vision" style="width: 22vw; height:50vh;">
        <div class="card-body">
          <div class="break">
          <p class="subtitle-goals fs-4 d-flex justify-content-center">Vision</p>
          </div>
          <div class="break">
            <p class="content-goals mb-2 fs-6 d-flex justify-content-center text-center">"A world-class, functional and responsive Local Governance Resource Center towards excellent governance."</p>
          </div>
          </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <div class="card goal-mission" style="width: 22vw; height:50vh">
            <div class="card-body">
              <p class="subtitle-goals fs-4 d-flex justify-content-center">Mission</p>
              <p class="content-goals mb-2 fs-6 d-flex justify-content-center text-center">"Provides quality information created, shared and sustained by committed stakeholders."</p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
      <div class="card goal-goals" style="width: 22vw; height:50vh">
        <div class="break">
          <div class="card-body">    
            <p class="subtitle-goals fs-4 d-flex justify-content-center">Goals</p>
            <p class="content-goals mb-2 fs-6 text-center">To promote a culture of learning and knowledge sharing in pursuit of sustainable development through excellence in local governance."</p>
            <p class="content-goals mb-2 fs-6 text-center">To support DILG in its role a primary catalyst for excellence in local governance.</p>
            <p class="content-goals mb-2 fs-6 text-center">To harness the role of DILG as knowledge brokers and facilitators of capacity development in local governance.</p>
          </div>
        </div>
      </div>
    </div>
</div>
</section>


<!--This is the Principles Section-->
<section id="principles" class="principles">
  <div class="row p-3">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
      <div class="d-flex justify-content-center">
        <img class="img-fluid shadow mb-0" src="img/keypart.gif" style="width:70%; height:90%;"/>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-center">
              <span class="title-principles fs-2">The Key Principles</span>
            </div>
            </div>
            <div class="col-12">
              <p class="content-history fw-light fs-6 px-4"><b>Knowledge Management</b> is the over-arching framework of the LGRC. Knowledge Management is a process that involves the acquisition, storage, retrieval, creation, sharing, use application and evaluation of an organization's explicit and tacit knowledge in a systematic manner to achieve organizational goals. KM is a core process that will integrate DILG and the community's knowledge, tools, resources and business processes towards local governance.</p>
              <p class="content-history fw-light fs-6 px-4"><b>Multi-stakeholdership Participation</b> in LGRC is based on the belief that there is no monopoly of knowledge and that information should be shared and used to promote efficiency, effectiveness, learning and innovation in local governnance. LGRC, also believes that fostering community relationships and strenghtening networks and partnerships in local governance is necessary in building the culture of learning and knowledge sharing.</p>
              <p class="content-history fw-light fs-6 px-4"><b>Convergence in Local Governance</b> There is a crucial need to harmonize various initiatives in  local governance within DILG and beyond. The LGRC can provide the mechanisms and processes that would promote linkages, synergy and convergence of different programs of DILG and other local governance stakeholders across the regions.</p>
            </p>
        </div>
    </div>
  </div>
</section>


<!--This is the Activities Sectionk-->
<section id="activities" class="activities">
      <div class="d-flex justify-content-center">
        <span class="title-principles fs-2 mb-5">Activities</span>
        </div>
        <div class="row px-4">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
            <div id="slideshow">
            <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/assessment1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/assessment2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/assessment3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                      <img src="img/activities/assessment4.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
                    <p class="content-history fw-bold text-center fs-4">LGRRC Assessment 2023</p>
                    <p class="content-history fw-light fs-6">The DILG Local Governance Regional Resource Center 1 (LGRRC-1), represented by its core members, facility heads, and secretariat, was assessed by the Local Government Academy during the LGRRC On-Site Monitoring held on November 16, 2023 at the DILG R1 Training Hall. The assessment targeted Capacity, Overall implementation of KM Initiatives and LGA PPAs, and Performance, evaluated by Ms. Haide H. Canalita and Ms. Roselle A. Buenaventura, both from the LGA. </br></br> Further, the evaluators also visited the LGU Bauang and DILG Pangasinan Resource Center, adding a practical dimension to their evaluation process.</p> 
        </div>
      </div>

      <div class="row mt-5 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
              <p class="content-history fw-bold text-center fs-4">Ceremonial Launching of the Consortium of Multi-Stakeholders Committee (MSAC) Libraries of Region 1</p>
              <p class="content-history fw-light fs-6">The Department of the Interior and Local Government (DILG) Local Governance Regional Resource Center 1 represented by LGCDD Chief Pedro D. Gonzales, LGOO V Benedicta M. Barnachea, Ilocos Sur Cluster Leader Andres Vendiola Jr. together with the LGRRC Secretariat and Regional Information and Communication Technology Unit graced the Ceremonial Launching of the Consortium of Multi-Stakeholders Committee (MSAC) Libraries of Region 1 at the University of Northern Luzon, Vigan City, Ilocos Sur on September 22, 2023.</br></br>The activity commenced with an Opening Message from UNP Executive Assistant to the President Dr. Eleonor Belizar followed by the presentation of LGRRC1 consortium of MSAC Libraries, sharing of UNP best practices and MOU signing.</br></br>Sharing of Knowledge Products from LGRRC1 was facilitated as well as the photo opportunity. Dir. Thelma T. Vecina of the Local Government Academy (LGA) and DILG R1 Director Jonathan Paul M. Leusen, Jr. delivered their messages to congratulate and inspire the university and the participants.</br></br>A Consortium Meeting was conducted after the ceremony and presided by LGCDD Chief Gonzales.</p>    
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-md-2 order-sm-2 m-0">
        <div id="slideshow">
            <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/msac1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/msac2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/msac3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                      <img src="img/activities/msac5.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
      </div>


      <div class="row mt-5 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
        <div id="slideshow">
          <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/dmmmsu1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/dmmmsu2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/dmmmsu3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/dmmmsu4.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
              <p class="content-history fw-bold text-center fs-4">First Quarter MSAC Meeting cum Consortium of MSAC Libraries</p>
              <p class="content-history fw-light fs-6">DILG Region 1, through the Local Government Regional Resource Center 1(LGRRC 1) spearheads the conduct of the FY 2024 1st Quarter Multi-Stakeholders Advisory Committee cum Consortium of MSAC Libraries Meeting at DMMMSU-NLUC, Bacnotan, La Union on February 23 2024.</br></br>The said event was attended by heads and representatives from other member agencies, institutions and academes. It was coined within the overarching theme of advancing public service through the collaboration in knowledge management and knowledge sharing. During the event, some of the Department's programs namely the BNEO, BIDA and RIDS were introduced.</br></br> This activity aims to strengthen the buy-in of members and inspire them to move forward and also spearhead possible programs, projects, activities and interventions for the betterment of the general public.</p>           
      </div>
    </div>



      <div class="row mt-5 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
            <p class="content-history fw-bold text-center fs-4">BIDA 1st Anniversary Fun Run</p>
            <p class="content-history fw-light fs-6">In a strong display of unified action against the illegal drug trade, the Department of the Interior and Local Government (DILG) Region 1 led the Buhay Ingatan Droga’y Ayawan (BIDA) 1st Anniversary Fun Run , which took place at the Poro Point Baywalk in the City of San Fernando, La Union. This event, attended by over 2,000 individuals representing various sectors, including local government units (LGUs), advocacy groups, and national government agencies (NGAs), served as a platform to reaffirm the collective commitment to combatting the drug menace plaguing communities.</br></br>The event started with a short program that included the BIDA Dance and Zumba. Additionally, participants had a chance to get prizes in addition to refreshments.</br></br>The BIDA highlights the importance of collaboration with key law enforcement agencies such as the PNP, PDEA, BJMP, and BFP. Through this collaborative effort, the event underscored the nation's unwavering dedication to forging a safer and drug-free future for all its citizens.</p> 
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
        <div id="slideshow">
            <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/bida1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/bida2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/bida3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/bida4.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
      </div>


      <div class="row mt-5 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
        <div id="slideshow">
          <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/rids1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/rids2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/rids3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/rids4.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
            <p class="content-history fw-bold text-center fs-4">Regional Institutional Development Support(RIDS) Program</p>
            <p class="content-history fw-light fs-6">Interfacing Activity and Planning Workshop for the Implementation of the Regional Institutional Development Support (RIDS) Program held at Ynads Place and Resort, Brgy Namtutan, City of San Fernando, La Union.</br></br>This is in pursuance to the Department’s commitment to its Multi-Year Strategic Plan and in the Philippine Development Plan 2023 – 2028 to further improve the performance of the local government units (LGUs) in the Seal of Good Local Governance.</br></br>The RIDS aims to support the DILG Regional Offices’ innovations and interventions in enhancing local governance platforms, mechanisms, and process at their respective areas.</p>           
      </div>
  </div>


  <div class="row mt-5 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
            <p class="content-history fw-bold text-center fs-4">Barangay Newly Elected Officials (BNEO) Workshop for the Formulation of Modules</p>
            <p class="content-history fw-light fs-6">The DILG Regional Office 1, throught its Local Government Capability Development Division(LGCDD), conducted a two-day workshop on formulating modules for Barangay Newly Elected Officials(BNEO) Program Components 3 and 4. This workshop focused on module preparation and finalization, led by LGCDD Division Chief, Assistant Division Chief, PLGRC Program Managers, and BNEO Regional Focal Persons. </br></br> The activity commenced with an opening remarks from RD Jonathan Paul M. Leusen Jr., who empasized the importance of collaboration within DILG Region 1. He stressed that by working together, they could empower barangays in the region to build strong and effective governance.</br></br> LGCDD Assistant Division Chief Lily-Ann Z. Victorio outlined the workshop objectives and overview of the activity. ADC further empasized that the workshop was based on agreements reached during the BNEO post-evaluation conference. She then outlined the agenda for the two-day activity providing a clear roadmap for the day's discussions and activities.<
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 m-0">
        <div id="slideshow">
            <div class="slide-wrapper">
                <!-- Define each of the slides
            and write the content -->
                <div class="slide">
                    <img src="img/activities/bneo1.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/bneo2.jpg" style="width: 35vw; height: 50vh;"> 
                </div>
                <div class="slide">
                     <img src="img/activities/bneo3.jpg" style="width: 35vw; height: 50vh;">
                </div>
                <div class="slide">
                    <img src="img/activities/bneo4.jpg" style="width: 35vw; height: 50vh;">
                </div>
            </div>
            </div>
        </div>
      </div>
</div>
</section>



<!-- This is the Members Section-->
<section id="members" class="members">
<img src="img/lgrrcteam.png" style="width:100%;height:100%;">
</section>


<!--This is the Research Bank Section-->
<section id="research" class="research">
          <div class="row p-3 pb-5">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                          <span class="title-principles fs-2">Research Bank</span>
                        </div>
                    </div>
                    <div class="col-12">
                      <p class="content-history fw-light fs-6 px-4 mb-5">The following are research works that are solicited from Regional Development Council 1 (RDC 1) as reviewed and endorsed by its Regional Research Development and Innovation Committee (RDIC):</p>
                      <p class="content-history fw-light fs-6 px-4">UPDATED HARMONIZED REGION 1 RESEARCH AND DEVELOPMENT (R AND D) AGENDA</br><a href="https://region1.dilg.gov.ph/images/Transparency/QMSFINAL/updated%20HRRDA-final%20(4).pdf"><i class="bi bi-file-earmark-arrow-down-fill"></i>Download</a></p>              
                    </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="d-flex justify-content-center">
                <img class="img-fluid shadow mb-0" src="img/rdc-logo.gif" style="width:40%; height:70%;"/>
            </div>
            </div>
          </div>
</section>


<!-- This is the Published Books Section-->
<section id="books" class="books pt-5">
    <div class="d-flex justify-content-center">
        <span class="title-principles fs-2 mb-4">Published Books</span>
    </div>
          <div class="row mt-5 mx-5">
            <div class="col-sm-6">
                <div class="row">
                  <div class="d-flex justify-content-center">
                      <img src="img/book1.png" class="shadow p-0 mb-2" style="width:30%; height:90%;"></img>
                  </div>
                  <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-5">Panangsaranget ti Pangta ti COVID-19: Kadagupan Dagita Kasayaatan nga Aramid dagiti Lokal nga Gobyerno iti Rehiyon 1</p> 
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                  <div class="d-flex justify-content-center">
                      <img src="img/book2.png" class="shadow p-0 mb-4" style="width:30%; height:94%;"></img>
                  </div>
                  <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-5">LGRRC 1 Compendium of Service Offerings</p> 
                  </div>
                </div>
            </div>
            </div>
            <div class="row mt-5 mx-5">
            <div class="col-sm-6">
                <div class="row">
                  <div class="d-flex justify-content-center">
                      <img src="img/book3.png" class="shadow p-0 mb-2" style="width:30%; height:84%;"></img>
                  </div>
                  <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-5">Guidebook for Civil Society Organizations in Local Special Bodies and Local Budget Process</p> 
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                  <div class="d-flex justify-content-center">
                      <img src="img/book4.png" class="shadow p-0 mb-4" style="width:30%; height:90%;"></img>
                  </div>
                  <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-5">Comprehensive Development Plan (CDP) Facilitator's Toolkit</p> 
                  </div>
                </div>
            </div>
          </div>
</section>

<!--This is the MSAC Section-->
<section id="msac">
    <div class="d-flex justify-content-center">
        <span class="title-principles fs-2 mb-4">Multi-Stakeholder Advisory Committee</span>
    </div>
      <div class="d-flex justify-content-center mx-5">
        <div class="break">
          <p class="content-history text-center fw-light fs-6 px-5">
       The MSAC is a network of institutions (LGUs, CSOs, Academe, Public Sectors, NGAs) working together to leverage and share knowledge for local governance capacity development and excellence</p>
        </div>
      </div> 

      
      <div class="d-flex justify-content-center mt-5 px-5">
        <p class="content-history text-center fw-bold fs-5 mt-3">
         Roles of the Multi-Sectoral Advisory Committee(MSAC) in the operation of the Local Governance Regional Resource Center (LGRRC)</p>
      </div>
      <div class="row mt-3 px-5">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <p class="content-history fw-light fs-6 px-4"><b>General Direction and Guidance</b>: The MSAC recommends the overall direction and guidance for the LGRRC's operationalization. It ensures the alignment with the center's vision, mission and goals.</p>
            <p class="content-history fw-light fs-6 px-4"><b>Knowledge Contribution</b>: MSAC members contribute knowledge products sharing expertise and resources to enhance the local governance practices. This collaborative effort promotes efficiency and effectiveness.</p>
            <p class="content-history fw-light fs-6 px-4"><b>Accessibility and Dissemination</b>: They make knowledge products accessible to users, ensuring that valuable information reaches LGRRC stakeholders. This includes local government units(LGUs), NGOs, and other relevant parties.</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <p class="content-history fw-light fs-6 px-4"><b>Best Practices Development</b>: MSAC actively participates in developing best practices and encourages their replication across LGUs. This fosters continuous improvement in local governance.</p>
            <p class="content-history fw-light fs-6 px-4"><b>Stakeholder Convergence</b>: By identifying areas of convergence among stakeholders, MSAC promotes synergy and cooperation in local governance initiatives.</p>
        </div>
      </div>
        


    <div class="d-flex justify-content-center">
        <span class="title-principles fs-2 mb-4">MSAC Members</span>
    </div>
    <div class="row mt-4 mx-5">
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center mb-3">
                    <a href="https://region1.dilg.gov.ph/">
                      <img src="img/logo/dilg.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">DILG Region 1</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://ched.gov.ph/">
                      <img src="img/logo/ched.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Commision on Higher Education</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                      <a href="https://www.csc.gov.ph/">
                        <img src="img/logo/csc.svg"  style="width:10vw; height:20vh;"></img>
                      </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Civil Service Commision</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                      <a href="https://ilocos.da.gov.ph/">
                        <img src="img/logo/da.svg"  style="width:10vw; height:20vh;"></img> 
                      </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Agriculture</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://www.dbm.gov.ph/">
                        <img src="img/logo/dbm.svg"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Budget and Management</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
            <div class="row mt-1">
                 <div class="d-flex justify-content-center mb-4">
                    <a href="https://www.deped.gov.ph/regions/region-i/">
                      <img src="img/logo/deped.png"  style="width:10vw; height:16vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Education</p> 
                </div>
               </div>
          </div>
    </div>
    <div class="row mx-5">
         <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://denr.gov.ph/">
                      <img src="img/logo/denr.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Environment and Natural Resources</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://www.dmmmsu.edu.ph/">
                      <img src="img/logo/dmmmsu.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Don Mariano Marcos Memorial State University</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://ro1.doh.gov.ph/">
                      <img src="img/logo/doh.png"  style="width:10vw; height:20vh;"></img>
                  </a>  
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Health</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row mt-4">
                <div class="d-flex justify-content-center mt-4 mb-4">
                    <a href="https://fo1.dswd.gov.ph/">
                      <img src="img/logo/dswd.png"  style="width:10vw; height:10vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Social Welfare and Development</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://www.dti.gov.ph/regions/region1/">
                      <img src="img/logo/dti.svg"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Department of Trade and Industry</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://www.facebook.com/GIFTED2012/">
                      <img src="img/logo/glc.png"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Gifted Learning Centre</p> 
                </div>
               </div>
          </div>
    </div>
    <div class="row mx-5">
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://ispsc.edu.ph/home/">
                      <img src="img/logo/ispsc.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Ilocos Sur Polytechnic State College</p> 
                </div>
               </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                      <a href="https://lmp.org.ph/">
                      <img src="img/logo/lmp.jpeg"  style="width:10vw; height:20vh;"></img>
                      </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">League of Municipalities of the Philippines-Ilocos Norte Chapter</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                <a href="https://lmp.org.ph/">
                      <img src="img/logo/lmp.jpeg"  style="width:10vw; height:20vh;"></img>
                </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">League of Municipalities of the Philippines-Ilocos Sur Chapter</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://lmp.org.ph/">
                      <img src="img/logo/lmp.jpeg"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">League of Municipalities of the Philippines-La Union Chapter</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://lmp.org.ph/">
                      <img src="img/logo/lmp.jpeg"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">League of Municipalities of the Philippines-Pangasinan Chapter</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://lyceum.edu.ph/">
                      <img src="img/logo/lnu.png"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Lyceum Northwestern University</p> 
                </div>
               </div>
          </div>
    </div>
    <div class="row mx-5">
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://www.mmsu.edu.ph/">
                      <img src="img/logo/mmsu.png"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Mariano Marcos Memorial State University</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="">
                      <img src="img/logo/nlpsc.png"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">North Luzon Philippine State College</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://www.ocd.gov.ph/">
                      <img src="img/logo/ocd.svg"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Office of the Civil Defense</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center mt-4">
                    <a href="https://pia.gov.ph/">
                      <img src="img/logo/pia.png"  style="width:10vw; height:16vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Philippine Information Agency</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://rsso01.psa.gov.ph/">
                      <img src="img/logo/psa.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Philippine Statistics Authority</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://main.psu.edu.ph/">
                      <img src="img/logo/psu.png"  style="width:10vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Pangasinan State University</p> 
                </div>
               </div>
          </div>
    </div>
    <div class="row mx-5">
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://www.slc-sflu.edu.ph/">
                      <img src="img/logo/slc.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Saint Louis College</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
            <div class="row mt-1">
                 <div class="d-flex justify-content-center mb-4">
                    <a href="#">
                      <img src="img/logo/sangbay.png"  style="width:15vw; height:16vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Sangbay DS Concepts Inc.</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <a href="https://tesdaregion1.com/wp/">
                      <img src="img/logo/tesda.png"  style="width:8vw; height:20vh;"></img>
                  </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">Technical Education and Skills Development Authority</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="https://ul.edu.ph/">
                      <img src="img/logo/ul.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">University of Luzon</p> 
                </div>
               </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="http://unp.edu.ph/">
                      <img src="img/logo/unp.png"  style="width:10vw; height:20vh;"></img>
                    </a>
                </div>
                <div class="text-center p-3">                  
                      <p class="content-history fw-light fs-6 px-4 mb-2">University of Northern Philippines</p> 
                </div>
               </div>
          </div>
    </div>
</section>


<script>
  var slideshows = document.querySelectorAll('[data-component="slideshow"]');
slideshows.forEach(initSlideShow);

function initSlideShow(slideshow) {

	var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

	var index = 0, time = 5000;
	slides[index].classList.add('active');

	setInterval( () => {
		slides[index].classList.remove('active');
		
		index++;
		if (index === slides.length) index = 0;

		slides[index].classList.add('active');

	}, time);
}
</script>
</body>





<footer class="bg-body-tertiary">
      <div class="row pt-3">
                <div class="col-md-12 text-center">
                    <img src="img/lgrrc1.png" alt="" style="width:100px"><br>
                    <span class="content-history"><strong>Local Governance Regional Resource Center 1</strong></span><br>
                    <span class="content-history">© 2024 Department of the Interior and Local Government Region 1</span><br>
                    <a href="https://region1.dilg.gov.ph" class="content-history text-muted" target="_blank"><i class="bi bi-globe"></i> region1.dilg.gov.ph</a>&nbsp;&nbsp;
                    <a href="https://www.facebook.com/DILGIlocosRegion/" class="content-history text-muted" target="_blank"><i class="bi bi-facebook"></i> DILG Ilocos Region</a>&nbsp;&nbsp;
                    <a href="https://www.youtube.com/@officialdilgregioniyoutube7991" class="content-history text-muted" target="_blank"><i class="bi bi-youtube"></i></i> Official DILG Region I Youtube Channel</a>
                </div>
            </div>
</footer>
