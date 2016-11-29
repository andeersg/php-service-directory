<?php

namespace andeersg\TjenesteKatalog;

/**
 * Class Service.
 */
class Service
{
    /**
     * Variable alternativtNavn.
     */
    protected $alternativtNavn = '';

    /**
     * Variable beskrivelse.
     */
    protected $beskrivelse = '';

    /**
     * Variable beslektedeTjenester.
     */
    protected $beslektedeTjenester = '';

    /**
     * Variable brosjyrer.
     */
    protected $brosjyrer = '';

    /**
     * Variable brukOverordnet.
     */
    protected $brukOverordnet = false;

    /**
     * Variable datoOppdatert.
     */
    protected $datoOppdatert = '';

    /**
     * Variable datoOpprettet.
     */
    protected $datoOpprettet = '';

    /**
     * Variable datoPublisert.
     */
    protected $datoPublisert = '';

    /**
     * Variable dokumentRef.
     */
    protected $dokumentRef = [];

    /**
     * Variable emneordRefs.
     */
    protected $emneordRefs = [];

    /**
     * Variable fletteAlternativtNavn.
     */
    protected $fletteAlternativtNavn = 1;

    /**
     * Variable fletteBeskrivelse.
     */
    protected $fletteBeskrivelse = 1;

    /**
     * Variable fletteBeslektedeTjenester.
     */
    protected $fletteBeslektedeTjenester = 1;

    /**
     * Variable fletteBrosjyrer.
     */
    protected $fletteBrosjyrer = 1;

    /**
     * Variable fletteDatoGodkjent.
     */
    protected $fletteDatoGodkjent = 1;

    /**
     * Variable fletteDatoOppdatert.
     */
    protected $fletteDatoOppdatert = 1;

    /**
     * Variable fletteDatoOpprettet.
     */
    protected $fletteDatoOpprettet = 1;

    /**
     * Variable fletteDatoPublisert.
     */
    protected $fletteDatoPublisert = 1;

    /**
     * Variable fletteEmneord.
     */
    protected $fletteEmneord = 1;

    /**
     * Variable fletteFrittFelt1.
     */
    protected $fletteFrittFelt1 = 1;

    /**
     * Variable fletteFrittFelt2.
     */
    protected $fletteFrittFelt2 = 1;

    /**
     * Variable fletteFrittFelt3.
     */
    protected $fletteFrittFelt3 = 1;

    /**
     * Variable fletteFrittFelt4.
     */
    protected $fletteFrittFelt4 = 1;

    /**
     * Variable fletteFrittFelt5.
     */
    protected $fletteFrittFelt5 = 1;

    /**
     * Variable fletteGyldigFra.
     */
    protected $fletteGyldigFra = 1;

    /**
     * Variable fletteGyldigTil.
     */
    protected $fletteGyldigTil = 1;

    /**
     * Variable fletteIngress.
     */
    protected $fletteIngress = 1;

    /**
     * Variable fletteInternOpplysninger.
     */
    protected $fletteInternOpplysninger = 1;

    /**
     * Variable fletteInternSaksgang.
     */
    protected $fletteInternSaksgang = 1;

    /**
     * Variable fletteKostraID.
     */
    protected $fletteKostraID = 1;

    /**
     * Variable fletteKriterier.
     */
    protected $fletteKriterier = 1;

    /**
     * Variable fletteLivsitID.
     */
    protected $fletteLivsitID = 1;

    /**
     * Variable fletteLover.
     */
    protected $fletteLover = 1;

    /**
     * Variable fletteMalgruppe.
     */
    protected $fletteMalgruppe = 1;

    /**
     * Variable fletteNavn.
     */
    protected $fletteNavn = 1;

    /**
     * Variable flettePartnere.
     */
    protected $flettePartnere = 1;

    /**
     * Variable flettePris.
     */
    protected $flettePris = 1;

    /**
     * Variable fletteServicekontoretsAnsvar.
     */
    protected $fletteServicekontoretsAnsvar = 1;

    /**
     * Variable fletteServicelofte.
     */
    protected $fletteServicelofte = 1;

    /**
     * Variable fletteServicesanksjon.
     */
    protected $fletteServicesanksjon = 1;

    /**
     * Variable fletteServicevilkar.
     */
    protected $fletteServicevilkar = 1;

    /**
     * Variable fletteSoknadBehandling.
     */
    protected $fletteSoknadBehandling = 1;

    /**
     * Variable fletteSoknadBehandlingstid.
     */
    protected $fletteSoknadBehandlingstid = 1;

    /**
     * Variable fletteSoknadFrist.
     */
    protected $fletteSoknadFrist = 1;

    /**
     * Variable fletteSoknadKlage.
     */
    protected $fletteSoknadKlage = 1;

    /**
     * Variable fletteSoknadMerknader.
     */
    protected $fletteSoknadMerknader = 1;

    /**
     * Variable fletteSoknadMottaker.
     */
    protected $fletteSoknadMottaker = 1;

    /**
     * Variable fletteSoknadSkjema.
     */
    protected $fletteSoknadSkjema = 1;

    /**
     * Variable fletteSoknadVedlegg.
     */
    protected $fletteSoknadVedlegg = 1;

    /**
     * Variable fletteSoknadVeiledning.
     */
    protected $fletteSoknadVeiledning = 1;

    /**
     * Variable fletteStatsID.
     */
    protected $fletteStatsID = 1;

    /**
     * Variable fletteStikkord.
     */
    protected $fletteStikkord = 1;

    /**
     * Variable fletteTjenesteEier.
     */
    protected $fletteTjenesteEier = 1;

    /**
     * Variable fletteTjenesteID.
     */
    protected $fletteTjenesteID = 1;

    /**
     * Variable frittFelt1.
     */
    protected $frittFelt1 = '';

    /**
     * Variable frittFelt2.
     */
    protected $frittFelt2 = '';

    /**
     * Variable frittFelt3.
     */
    protected $frittFelt3 = '';

    /**
     * Variable frittFelt4.
     */
    protected $frittFelt4 = '';

    /**
     * Variable frittFelt5.
     */
    protected $frittFelt5 = '';

    /**
     * Variable ingress.
     */
    protected $ingress = '';

    /**
     * Variable internOpplysninger.
     */
    protected $internOpplysninger = '';

    /**
     * Variable internSaksgang.
     */
    protected $internSaksgang = '';

    /**
     * Variable kostraID.
     */
    protected $kostraID = '';

    /**
     * Variable kriterier.
     */
    protected $kriterier = '';

    /**
     * Variable ledetekstFrittFelt1.
     */
    protected $ledetekstFrittFelt1 = '';

    /**
     * Variable ledetekstFrittFelt2.
     */
    protected $ledetekstFrittFelt2 = '';

    /**
     * Variable ledetekstFrittFelt3.
     */
    protected $ledetekstFrittFelt3 = '';

    /**
     * Variable ledetekstFrittFelt4.
     */
    protected $ledetekstFrittFelt4 = '';

    /**
     * Variable ledetekstFrittFelt5.
     */
    protected $ledetekstFrittFelt5 = '';

    /**
     * Variable livsITRefs.
     */
    protected $livsITRefs = [];

    /**
     * Variable lover.
     */
    protected $lover = '';

    /**
     * Variable lovpalagtTjeneste.
     */
    protected $lovpalagtTjeneste = false;

    /**
     * Variable malgruppe.
     */
    protected $malgruppe = '';

    /**
     * Variable merknaderOSK.
     */
    protected $merknaderOSK = '';

    /**
     * Variable navn.
     */
    protected $navn = '';

    /**
     * Variable oppgrader.
     */
    protected $oppgrader = false;

    /**
     * Variable partnere.
     */
    protected $partnere = '';

    /**
     * Variable pris.
     */
    protected $pris = '';

    /**
     * Variable revisjon.
     */
    protected $revisjon = 1;

    /**
     * Variable servicekontoretsAnsvar.
     */
    protected $servicekontoretsAnsvar = '';

    /**
     * Variable servicelofte.
     */
    protected $servicelofte = '';

    /**
     * Variable servicesanksjon.
     */
    protected $servicesanksjon = '';

    /**
     * Variable servicevilkar.
     */
    protected $servicevilkar = '';

    /**
     * Variable soknadBehandling.
     */
    protected $soknadBehandling = '';

    /**
     * Variable soknadBehandlingstid.
     */
    protected $soknadBehandlingstid = '';

    /**
     * Variable soknadFrist.
     */
    protected $soknadFrist = '';

    /**
     * Variable soknadKlage.
     */
    protected $soknadKlage = '';

    /**
     * Variable soknadMerknader.
     */
    protected $soknadMerknader = '';

    /**
     * Variable soknadMottaker.
     */
    protected $soknadMottaker = '';

    /**
     * Variable soknadSkjema.
     */
    protected $soknadSkjema = '';

    /**
     * Variable soknadVedlegg.
     */
    protected $soknadVedlegg = '';

    /**
     * Variable soknadVeiledning.
     */
    protected $soknadVeiledning = '';

    /**
     * Variable statsID.
     */
    protected $statsID = '';

    /**
     * Variable status.
     */
    protected $status = 1;

    /**
     * Variable statusAlternativtNavn.
     */
    protected $statusAlternativtNavn = 1;

    /**
     * Variable statusBeskrivelse.
     */
    protected $statusBeskrivelse = 1;

    /**
     * Variable statusBeslektedeTjenester.
     */
    protected $statusBeslektedeTjenester = 1;

    /**
     * Variable statusBrosjyrer.
     */
    protected $statusBrosjyrer = 1;

    /**
     * Variable statusDatoGodkjent.
     */
    protected $statusDatoGodkjent = 1;

    /**
     * Variable statusDatoOppdatert.
     */
    protected $statusDatoOppdatert = 1;

    /**
     * Variable statusDatoOpprettet.
     */
    protected $statusDatoOpprettet = 1;

    /**
     * Variable statusDatoPublisert.
     */
    protected $statusDatoPublisert = 1;

    /**
     * Variable statusEmneord.
     */
    protected $statusEmneord = 1;

    /**
     * Variable statusFrittFelt1.
     */
    protected $statusFrittFelt1 = 1;

    /**
     * Variable statusFrittFelt2.
     */
    protected $statusFrittFelt2 = 1;

    /**
     * Variable statusFrittFelt3.
     */
    protected $statusFrittFelt3 = 1;

    /**
     * Variable statusFrittFelt4.
     */
    protected $statusFrittFelt4 = 1;

    /**
     * Variable statusFrittFelt5.
     */
    protected $statusFrittFelt5 = 1;

    /**
     * Variable statusGyldigFra.
     */
    protected $statusGyldigFra = 1;

    /**
     * Variable statusGyldigTil.
     */
    protected $statusGyldigTil = 1;

    /**
     * Variable statusIngress.
     */
    protected $statusIngress = 1;

    /**
     * Variable statusInternOpplysninger.
     */
    protected $statusInternOpplysninger = 1;

    /**
     * Variable statusInternSaksgang.
     */
    protected $statusInternSaksgang = 1;

    /**
     * Variable statusKostraID.
     */
    protected $statusKostraID = 1;

    /**
     * Variable statusKriterier.
     */
    protected $statusKriterier = 1;

    /**
     * Variable statusLivsitID.
     */
    protected $statusLivsitID = 1;

    /**
     * Variable statusLover.
     */
    protected $statusLover = 1;

    /**
     * Variable statusMalgruppe.
     */
    protected $statusMalgruppe = 1;

    /**
     * Variable statusNavn.
     */
    protected $statusNavn = 1;

    /**
     * Variable statusPartnere.
     */
    protected $statusPartnere = 1;

    /**
     * Variable statusPris.
     */
    protected $statusPris = 1;

    /**
     * Variable statusServicekontoretsAnsvar.
     */
    protected $statusServicekontoretsAnsvar = 1;

    /**
     * Variable statusServicelofte.
     */
    protected $statusServicelofte = 1;

    /**
     * Variable statusServicesanksjon.
     */
    protected $statusServicesanksjon = 1;

    /**
     * Variable statusServicevilkar.
     */
    protected $statusServicevilkar = 1;

    /**
     * Variable statusSoknadBehandling.
     */
    protected $statusSoknadBehandling = 1;

    /**
     * Variable statusSoknadBehandlingstid.
     */
    protected $statusSoknadBehandlingstid = 1;

    /**
     * Variable statusSoknadFrist.
     */
    protected $statusSoknadFrist = 1;

    /**
     * Variable statusSoknadKlage.
     */
    protected $statusSoknadKlage = 1;

    /**
     * Variable statusSoknadMerknader.
     */
    protected $statusSoknadMerknader = 1;

    /**
     * Variable statusSoknadMottaker.
     */
    protected $statusSoknadMottaker = 1;

    /**
     * Variable statusSoknadSkjema.
     */
    protected $statusSoknadSkjema = 1;

    /**
     * Variable statusSoknadVedlegg.
     */
    protected $statusSoknadVedlegg = 1;

    /**
     * Variable statusSoknadVeiledning.
     */
    protected $statusSoknadVeiledning = 1;

    /**
     * Variable statusStatsID.
     */
    protected $statusStatsID = 1;

    /**
     * Variable statusStikkord.
     */
    protected $statusStikkord = 1;

    /**
     * Variable statusTjenesteEier.
     */
    protected $statusTjenesteEier = 1;

    /**
     * Variable statusTjenesteID.
     */
    protected $statusTjenesteID = 1;

    /**
     * Variable stikkord.
     */
    protected $stikkord = '';

    /**
     * Variable tjenesteEier.
     */
    protected $tjenesteEier = '';

    /**
     * Variable tjenestebeskrivelseID.
     */
    protected $tjenestebeskrivelseID = [];

    /**
     * Variable beslektedeTjenesterRef.
     */
    protected $beslektedeTjenesterRef = [];

    /**
     * Initialize and fill properties.
     */
    public function __construct($service)
    {
        foreach ($service as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * Get method to fetch properties.
     */
    public function get($key)
    {
        if (!property_exists($this, $key)) {
            throw new \Exception('Unknown Service property: ' . $key);
        }
        return $this->{$key};
    }

    /**
     * Set method to edit properties.
     */
    public function set($key)
    {
        if (!property_exists($this, $key)) {
            throw new \Exception('Unknown Service property: ' . $key);
        }
        return $this->{$key};
    }

    /**
     * Output all methods as array.
     */
    public function toArray()
    {
        $output = [];
        foreach ($this as $key => $value) {
            $output[$key] = $value;
        }
        return $output;
    }
}
