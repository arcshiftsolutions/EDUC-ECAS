﻿Import-Module .\Microsoft.Xrm.Data.Powershell\2.8.0\Microsoft.Xrm.Data.PowerShell.psd1
Import-Module .\Adoxio.Dynamics.DevOps\0.8.0\Adoxio.Dynamics.DevOps.psd1
.\Import.ps1 -CrmConnectionName OnpremiseUAT-LCLBPortal -ImportSettings LCLBPortalsCustomizations -PackageType Managed
