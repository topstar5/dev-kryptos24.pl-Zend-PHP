<?php

class Application_Service_Register
{
    /** @var self */
    protected static $_instance = null;

    private function __clone() {}
    public static function getInstance() { return null === self::$_instance ? new self : self::$_instance; }

    public function getDefaultRights(){
        return '{"perm\/risk-assessment":1,"perm\/risk-assessment\/create":1,"perm\/risk-assessment\/update":1,"perm\/risk-assessment\/remove":0,"perm\/surveys":1,"perm\/surveys\/create":1,"perm\/surveys\/remove":0,"perm\/surveys\/browse":1,"perm\/config":1,"perm\/config\/company-information":1,"perm\/config\/logs":1,"perm\/documents":1,"perm\/documents\/all":1,"perm\/documents\/update":1,"perm\/documents\/remove-all":0,"perm\/documentsversioned":1,"perm\/documentsversioned\/create":1,"perm\/documentsversioned\/update":1,"perm\/documentsversioned\/remove":0,"perm\/documentsversioned\/version-create":1,"perm\/documentsversioned\/version-update":1,"perm\/documentsversioned\/version-remove":1,"perm\/documenttemplates":1,"perm\/documenttemplates\/create":1,"perm\/documenttemplates\/update":1,"perm\/documenttemplates\/remove":0,"perm\/groups":1,"perm\/groups\/create":0,"perm\/groups\/update":0,"perm\/groups\/remove":0,"perm\/aplikacje-moduly":1,"perm\/aplikacje-moduly\/create":1,"perm\/aplikacje-moduly\/update":1,"perm\/aplikacje-moduly\/remove":0,"perm\/kopiezapasowe":1,"perm\/kopiezapasowe\/create":1,"perm\/kopiezapasowe\/update":1,"perm\/kopiezapasowe\/remove":0,"perm\/computer":1,"perm\/computer\/create":1,"perm\/computer\/update":1,"perm\/computer\/remove":1,"perm\/sites":1,"perm\/sites\/create":1,"perm\/sites\/update":1,"perm\/sites\/remove":0,"perm\/aplikacje":1,"perm\/aplikacje\/all":1,"perm\/aplikacje\/update":1,"perm\/aplikacje\/remove":0,"perm\/inspections":1,"perm\/inspections\/create":1,"perm\/inspections\/update":1,"perm\/inspections\/remove":0,"perm\/inspections\/report-create":1,"perm\/course-categories":1,"perm\/course-categories\/create":1,"perm\/course-categories\/update":1,"perm\/course-categories\/remove":0,"perm\/exam-categories":1,"perm\/exam-categories\/create":1,"perm\/exam-categories\/update":1,"perm\/exam-categories\/remove":0,"perm\/kominfoadm":1,"perm\/kominfoadm\/all":1,"perm\/kominfoadm\/create":1,"perm\/kominfoadm\/remove":0,"perm\/kominfoadm\/send":1,"perm\/tickets":1,"perm\/tickets\/create":1,"perm\/tickets\/update":1,"perm\/tickets\/remove":1,"perm\/tickets\/assignees":1,"perm\/tickets\/allaccess":1,"perm\/tickets\/config":1,"perm\/admin":1,"perm\/shared-users":1,"perm\/shared-users\/create":1,"perm\/shared-users\/update":1,"perm\/shared-users\/remove":0,"perm\/kontabankowe":1,"perm\/kontabankowe\/create":1,"perm\/kontabankowe\/update":1,"perm\/kontabankowe\/remove":1,"perm\/kontabankowe\/osoby":1,"perm\/osobyinne":1,"perm\/osobyinne\/create":1,"perm\/osobyinne\/update":1,"perm\/osobyinne\/remove":1,"perm\/podpisy":1,"perm\/podpisy\/create":1,"perm\/podpisy\/update":1,"perm\/podpisy\/remove":1,"perm\/podpisy\/osoby":1,"perm\/osoby":1,"perm\/osoby\/create":1,"perm\/osoby\/update":1,"perm\/osoby\/remove":1,"perm\/osoby\/report":1,"perm\/osoby\/set-permissions":1,"perm\/osoby\/set-upowaznienia":1,"perm\/osoby\/set-klucze":1,"perm\/osoby\/admin":1,"perm\/osoby\/proposal_add":1,"perm\/permissions":1,"perm\/permissions\/create":1,"perm\/permissions\/update":1,"perm\/permissions\/remove":0,"perm\/user-profile":1,"perm\/user-profile\/logs":1,"perm\/flows":1,"perm\/flows\/create":1,"perm\/flows\/update":1,"perm\/flows\/remove":0,"perm\/registry-phone-calls":1,"perm\/registry-phone-calls\/create":1,"perm\/registry-phone-calls\/update":1,"perm\/registry-phone-calls\/remove":0,"perm\/registry":1,"perm\/registry\/all-access":1,"perm\/public-registry":1,"perm\/public-registry\/create":1,"perm\/public-registry\/update":1,"perm\/public-registry\/remove":0,"perm\/zbiory-changelog":1,"perm\/zbiory-changelog\/create":1,"perm\/zbiory-changelog\/update":1,"perm\/zbiory-changelog\/remove":1,"perm\/flows-roles":1,"perm\/flows-roles\/create":1,"perm\/flows-roles\/update":1,"perm\/flows-roles\/remove":0,"perm\/numberingschemes":1,"perm\/numberingschemes\/create":1,"perm\/numberingschemes\/update":1,"perm\/numberingschemes\/remove":0,"perm\/systemy-teleinformacyjne":1,"perm\/systemy-teleinformacyjne\/create":1,"perm\/systemy-teleinformacyjne\/update":1,"perm\/systemy-teleinformacyjne\/remove":0,"perm\/courses":1,"perm\/courses\/create":1,"perm\/courses\/update":1,"perm\/courses\/remove":0,"perm\/exams":1,"perm\/exams\/create":1,"perm\/exams\/update":1,"perm\/exams\/remove":0,"perm\/data-transfers":1,"perm\/data-transfers\/create":1,"perm\/data-transfers\/update":1,"perm\/data-transfers\/remove":0,"perm\/companies":1,"perm\/companies\/all":1,"perm\/companies\/create":1,"perm\/companies\/update":1,"perm\/companies\/remove":1,"perm\/company-employees":1,"perm\/company-employees\/all":1,"perm\/company-employees\/create":1,"perm\/company-employees\/update":1,"perm\/company-employees\/remove":0,"perm\/flows-types":1,"perm\/flows-types\/update":1,"perm\/flows-types\/remove":0,"perm\/verifications":1,"perm\/verifications\/create":1,"perm\/verifications\/remove":0,"perm\/verifications\/actions":1,"perm\/proposals":1,"perm\/proposals\/create":1,"perm\/proposals\/update":1,"perm\/proposals\/remove":0,"perm\/flows-events":1,"perm\/flows-events\/create":1,"perm\/flows-events\/update":1,"perm\/flows-events\/remove":0,"perm\/tasks":0,"perm\/public-procurements":1,"perm\/public-procurements\/create":1,"perm\/public-procurements\/update":1,"perm\/public-procurements\/remove":1,"perm\/public-procurements\/remove-file":1,"perm\/zbiory":1,"perm\/zbiory\/edit":1,"perm\/zbiory\/remove":0,"perm\/zbiory\/report":1,"perm\/zbiory\/fields":1,"perm\/zbiory\/pomieszczenia":1,"perm\/zbiory\/giodo":1,"perm\/zbiory\/contacts":1,"perm\/zbiory\/legalacts":1,"perm\/zbiory\/zabezpieczenia":1,"perm\/legalacts":1,"perm\/legalacts\/create":1,"perm\/legalacts\/update":1,"perm\/legalacts\/remove":0,"perm\/budynki":1,"perm\/budynki\/create":1,"perm\/budynki\/update":1,"perm\/budynki\/remove":0,"perm\/fielditems":1,"perm\/fielditems\/create":1,"perm\/fielditems\/update":1,"perm\/fielditems\/remove":0,"perm\/fielditems\/unlock":1,"perm\/fielditemscategories":1,"perm\/fielditemscategories\/create":1,"perm\/fielditemscategories\/update":1,"perm\/fielditemscategories\/remove":0,"perm\/fielditemscategories\/unlock":1,"perm\/fieldscategories":1,"perm\/fieldscategories\/create":1,"perm\/fieldscategories\/update":1,"perm\/fieldscategories\/remove":0,"perm\/fieldscategories\/unlock":1,"perm\/contacts":1,"perm\/contacts\/create":1,"perm\/contacts\/update":1,"perm\/contacts\/remove":0,"perm\/persons":1,"perm\/persons\/create":1,"perm\/persons\/update":1,"perm\/persons\/remove":0,"perm\/persons\/unlock":1,"perm\/fields":1,"perm\/fields\/create":1,"perm\/fields\/update":1,"perm\/fields\/remove":0,"perm\/fields\/unlock":1,"perm\/pomieszczenia":1,"perm\/pomieszczenia\/create":1,"perm\/pomieszczenia\/update":1,"perm\/pomieszczenia\/remove":0,"perm\/giodo":1,"perm\/persontypes":1,"perm\/persontypes\/create":1,"perm\/persontypes\/update":1,"perm\/persontypes\/remove":0,"perm\/persontypes\/unlock":1,"perm\/zabezpieczenia":1,"perm\/zabezpieczenia\/create":1,"perm\/zabezpieczenia\/update":1,"perm\/zabezpieczenia\/remove":0,"perm\/eventscompanies":1,"perm\/eventscompanies\/create":1,"perm\/eventscompanies\/update":1,"perm\/eventscompanies\/remove":0,"perm\/eventspersons":1,"perm\/eventspersons\/create":1,"perm\/eventspersons\/update":1,"perm\/eventspersons\/remove":0,"perm\/eventscars":1,"perm\/eventscars\/create":1,"perm\/eventscars\/update":1,"perm\/eventscars\/remove":0,"perm\/events":1,"perm\/events\/create":1,"perm\/events\/update":1,"perm\/events\/remove":0,"perm\/events\/serwatka":1,"perm\/eventspersonstypes":1,"perm\/eventspersonstypes\/create":1,"perm\/eventspersonstypes\/update":1,"perm\/eventspersonstypes\/remove":0,"perm\/file-sources":1}';
    }
}