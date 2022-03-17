<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved.">
  <assemblyIdentity name="Microsoft-Windows-SecureStartup-Basic-Package" version="10.0.19041.1151" processorArchitecture="amd64" language="sl-SI" buildType="release" publicKeyToken="31bf3856ad364e35" />
  <package identifier="BitLocker_sl-SI" releaseType="Language Pack">
    <parent disposition="detect" integrate="separate" set="languageResources">
      <assemblyIdentity name="Microsoft-Windows-SecureStartup-Basic-Package" version="10.0.19041.1151" processorArchitecture="amd64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" />
    </parent>
    <update description="Omogoča šifriranje celotnega diska nosilca." displayName="Šifriranje pogona BitLocker" name="BitLocker">
      <mum2:customInformation xmlns:mum2="urn:schemas-microsoft-com:asm.v3">
        <mum2:Version Major="8" Minor="0" />
        <mum2:ServerComponent Description="Šifriranje pogona BitLocker zaščiti podatke v računalnikih, ki so bili izgubljeni, ukradeni ali računalnikih, ki niso bili pravilno vzeti iz rabe, tako, da šifrira celoten nosilec in preveri celovitost komponent predčasnega zagona. Podatki so dešifrirani le, če so te komponente uspešno preverjene in če je šifrirani pogon v izvirnem računalniku. Za preverjanje celovitosti potrebujete združljiv modul zaupanja TPM." DisplayName="Šifriranje pogona BitLocker" Id="61" Type="Feature" UniqueName="BitLocker">
          <mum2:NonAncestorDependencies>
            <mum2:ServerComponen