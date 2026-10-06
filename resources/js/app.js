import './bootstrap';
import { initCapabilities } from './capabilities';
import { initContact } from './contact';
import { initHero, initMobileNav } from './hero';
import { initProductProof } from './product-proof';
import { initSelectedWork } from './selected-work';
import { initWork } from './work';
import { initCaseBop } from './case-bop';
import { initSolutions } from './solutions';
import { initSolutionBusinessSoftware } from './solution-business-software';
import { initSolutionSaas } from './solution-saas';
import { initSolutionPlatforms } from './solution-platforms';
import { initSolutionAi } from './solution-ai';
import { initServices } from './services-page';
import { initServiceProductEngineering } from './service-product-engineering';
import { initServiceUiUx } from './service-ui-ux';
import { initServiceWeb } from './service-web';
import { initServiceMobile } from './service-mobile';
import { initServiceOps } from './service-ops';
import { initCompany } from './company';
import { initCompanyAbout } from './company-about';
import { initCompanyProcess } from './company-process';
import { initCompanyTechnology } from './company-technology';
import { initInsights } from './insights';
import { initInsightsEssay } from './insights-essay';

function boot() {
    initMobileNav();
    initHero();
    initCapabilities();
    initProductProof();
    initSelectedWork();
    initWork();
    initCaseBop();
    initSolutions();
    initSolutionBusinessSoftware();
    initSolutionSaas();
    initSolutionPlatforms();
    initSolutionAi();
    initServices();
    initServiceProductEngineering();
    initServiceUiUx();
    initServiceWeb();
    initServiceMobile();
    initServiceOps();
    initCompany();
    initCompanyAbout();
    initCompanyProcess();
    initCompanyTechnology();
    initInsights();
    initInsightsEssay();
    initContact();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
} else {
    boot();
}
