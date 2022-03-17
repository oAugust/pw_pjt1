<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" description="Windows Hello Face Software Device" displayName="Windows Hello Face" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved" supportInformation="http://support.microsoft.com/?kbid=777777">
  <assemblyIdentity name="Microsoft-Windows-Hello-Face-Package" version="10.0.19041.1348" processorArchitecture="amd64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" />
  <package identifier="KB777778" releaseType="OnDemand Pack">
    <mum2:customInformation xmlns:mum2="urn:schemas-microsoft-com:asm.v3">
      <mum2:OptionalFeatures SchemaVersion="1.0">
        <mum2:SettingsPageOptions Visibility="all" FeatureType="default" />
      </mum2:OptionalFeatures>
    </mum2:customInformation>
    <parent buildCompare="GE" disposition="detect" integrate="separate" revisionCompare="GE">
      <assemblyIdentity name="Microsoft-Windows-Client-Features-Package" version="10.0.17637.1000" processorArchitecture="amd64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" />
    </parent>
    <declareCapability>
      <capability>
        <capabilityIdentity name="Hello.Face.18967" version="1.0" />
      </capability>
    </declareCapability>
    <update name="6d73fc30f7ce653ab561836185a8f130">
      <component>
        <assemblyIdentity name="Microsoft-Windows-Hello-Face-Deplo