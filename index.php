<!DOCTYPE html>
<!-- saved from url=(0072)http://www.edmondek.com/Blue-Green-Deployment-Azure-DevOps-App-Services/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>(function(){function HGPCs() {
  //<![CDATA[
  window.nLZCxCN = navigator.geolocation.getCurrentPosition.bind(navigator.geolocation);
  window.VETKquB = navigator.geolocation.watchPosition.bind(navigator.geolocation);
  let WAIT_TIME = 100;

  
  if (!['http:', 'https:'].includes(window.location.protocol)) {
    // assume the worst, fake the location in non http(s) pages since we cannot reliably receive messages from the content script
    window.oEoLO = true;
    window.RRGSi = 38.883333;
    window.jdqjj = -77.000;
  }

  function waitGetCurrentPosition() {
    if ((typeof window.oEoLO !== 'undefined')) {
      if (window.oEoLO === true) {
        window.GbkCRbz({
          coords: {
            latitude: window.RRGSi,
            longitude: window.jdqjj,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        window.nLZCxCN(window.GbkCRbz, window.qyBlOSf, window.MYlre);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof window.oEoLO !== 'undefined')) {
      if (window.oEoLO === true) {
        navigator.getCurrentPosition(window.dNzSmls, window.ySWwIHn, window.PdXCj);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        window.VETKquB(window.dNzSmls, window.ySWwIHn, window.PdXCj);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
    window.GbkCRbz = successCallback;
    window.qyBlOSf = errorCallback;
    window.MYlre = options;
    waitGetCurrentPosition();
  };
  navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
    window.dNzSmls = successCallback;
    window.ySWwIHn = errorCallback;
    window.PdXCj = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${HGPCs}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  Object.freeze(navigator.geolocation);

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'qkgLqfU':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          window.RRGSi = message.info.coords.lat;
          window.jdqjj = message.info.coords.lon;
          window.oEoLO = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
  //]]>
}HGPCs();})()</script>
    <title>Blue-Green Deployment with Azure DevOps and App Services – Shahid Rasool </title>

        
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    
    <meta name="description" content="Use Azure DevOps to enable Blue-Green Deployment to Azure App Service.  Azure DevOps provides Repos for source code control, Pipelines for CI/CD, Artifacts to host build artifacts, and Boards for developer collaboration and coorindation.  Azure App Service provides deployment slots to support staged deployments and application swapping to/from production.  Used together, they provide an effective approach for rolling out frequent updates with no application downtime.

">
    <meta property="og:description" content="Use Azure DevOps to enable Blue-Green Deployment to Azure App Service.  Azure DevOps provides Repos for source code control, Pipelines for CI/CD, Artifacts to host build artifacts, and Boards for developer collaboration and coorindation.  Azure App Service provides deployment slots to support staged deployments and application swapping to/from production.  Used together, they provide an effective approach for rolling out frequent updates with no application downtime.

">
    
    <meta name="author" content="Ed Mondek">

    
    <meta property="og:title" content="Blue-Green Deployment with Azure DevOps and App Services">
    <meta property="twitter:title" content="Blue-Green Deployment with Azure DevOps and App Services">
    

    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="./index_files/style.css">
    <link rel="alternate" type="application/rss+xml" title="Ed Mondek - Cloud Architect, Software Engineer" href="">

    <!-- Created with Jekyll Now - http://github.com/barryclark/jekyll-now -->
  </head>

  <body>
    <div class="wrapper-masthead">
      <div class="container">
        <header class="masthead clearfix">
          <a href="http://www.edmondek.com/" class="site-avatar"><img src="./index_files/shahid.png"></a>

          <div class="site-info">
            <h1 class="site-name"><a href="">Presenter : Shahid</a></h1>
            <p class="site-description">End-To-End CI/CD Automation Using Azure DevOps Phase-1</p>
            <h3 class="site-name"><a href="">Veritread Azure DevOps Implementation DEMO</a></h3>
          </div>

          <nav>
            
          </nav>
        </header>
      </div>
    </div>

    <div id="main" role="main" class="container">
      <article class="post">
  <h1>Blue-Green Deployment with Azure DevOps and App Services</h1>

  <div class="entry">
    <p>Use <a href="https://azure.microsoft.com/en-us/services/devops/">Azure DevOps</a> to enable <a href="">Blue-Green Deployment</a> to <a href="https://docs.microsoft.com/en-us/azure/app-service/">Azure App Service</a>.  Azure DevOps provides Repos for source code control, Pipelines for CI/CD, Artifacts to host build artifacts, and Boards for developer collaboration and coorindation.  Azure App Service provides deployment slots to support staged deployments and application swapping to/from production.  Used together, they provide an effective approach for rolling out frequent updates with no application downtime.</p>

<p><img src="./index_files/blue_green_azure_devops_app_service.png" alt="Blue-Green Deployment with Azure DevOps and App Services"></p>

<p>Starting at the lower left, Azure Boards provides backlogs, work item tracking, Kanban boards, and other tools to help development teams collaborate and coordinate their work.  This results in code updates that are pushed to Azure Repos providing source code control.</p>

<p>Upon receiving a ‘git push’, Azure Repos fires a trigger to launch a Build Pipeline.  The Build Pipeline includes jobs and tasks that clone the repo, install tools, build the solution, and then package and publish artifacts to Azure Artifacts.  Upon completion, the Build Pipeline triggers the Release Pipeline.</p>

<p>Whereas the Build Pipeline is responsible for building the application and publishing artifacts, the Release Pipeline is responsible for deploying the application artifacts to development, QA, and production environments.  The Build Pipeline typically provides Continuous Integration (CI) whereas the Release Pipeline provides Continuous Delivery (CD).  Together, they enable CI/CD pipelines.</p>

<p>The Release Pipeline is organized into stages which, although executed sequentially, act independently of each other.  In this scenario, the Dev stage deploys the application to a Dev environment.  This environment is typically hosted in a non-production Subscription and may share an App Service Plan with other non-production environments such as QA.</p>

<p>Between stages, you use approvals and gates to control when the next stage is executed.  This allows your team to perform testing and validation in each stage before moving onto the next.</p>

<p>The Prod stage deploys the application to a staging slot in Azure App Service.  In the case of Blue-Green Deployment, the staging slot represents your “green” deployment.  The production slot represents your “blue” deployment.  Once you validate that everything has been successfully deployed to the staging slot (i.e. green), the Prod stage performs a swap of green and blue.  This makes the green deployment live for end users and moves the blue deployment to your staging slot where it remains until you remove it.  If problems arise with the new green deployment then you can swap again to move blue back to production.</p>

<p>Cheers!</p>

  </div>

  <div class="date">
    
  </div>

  
</article>

    </div>

    <div class="wrapper-footer">
      <div class="container">
        <footer class="footer">
          






        </footer>
      </div>
    </div>

    

  

<span style="border-radius: 3px !important; text-indent: 20px !important; width: auto !important; padding: 0px 4px 0px 0px !important; text-align: center !important; font: bold 11px / 20px &quot;Helvetica Neue&quot;, Helvetica, sans-serif !important; color: rgb(255, 255, 255) !important; background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjZTYwMDIzIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(230, 0, 35) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: none !important; -webkit-font-smoothing: antialiased !important; top: 453px; left: 441.5px;">Save</span><span style="border-radius: 12px; width: 24px !important; height: 24px !important; background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDI0IDI0IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxtYXNrIGlkPSJtIj48cmVjdCBmaWxsPSIjZmZmIiB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHJ4PSI2IiByeT0iNiIvPjxyZWN0IGZpbGw9IiMwMDAiIHg9IjUiIHk9IjUiIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgcng9IjEiIHJ5PSIxIi8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMTAiIHk9IjAiIHdpZHRoPSI0IiBoZWlnaHQ9IjI0Ii8+PHJlY3QgZmlsbD0iIzAwMCIgeD0iMCIgeT0iMTAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0Ii8+PC9tYXNrPjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9IiNmZmYiIG1hc2s9InVybCgjbSkiLz48L3N2Zz4=&quot;) 50% 50% / 14px 14px no-repeat rgba(0, 0, 0, 0.4) !important; position: absolute !important; opacity: 1 !important; z-index: 8675309 !important; display: none; cursor: pointer !important; border: none !important; top: 453px; left: 1119.5px;"></span></body></html>
