if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dich003_dich002]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dich003] DROP CONSTRAINT FK_dich003_dich002
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dich005_dich004]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dich005] DROP CONSTRAINT FK_dich005_dich004
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dich006_dich004]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dich006] DROP CONSTRAINT FK_dich006_dich004
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien017_dien001]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien017] DROP CONSTRAINT FK_dien017_dien001
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien018_dien001]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien018] DROP CONSTRAINT FK_dien018_dien001
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien003_dien002]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien003] DROP CONSTRAINT FK_dien003_dien002
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien004_dien003]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien004] DROP CONSTRAINT FK_dien004_dien003
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien015_dien003]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien015] DROP CONSTRAINT FK_dien015_dien003
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien016_dien003]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien016] DROP CONSTRAINT FK_dien016_dien003
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien017_dien003]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien017] DROP CONSTRAINT FK_dien017_dien003
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien005_dien004]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien005] DROP CONSTRAINT FK_dien005_dien004
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien007_dien006]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien007] DROP CONSTRAINT FK_dien007_dien006
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien008_dien007]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien008] DROP CONSTRAINT FK_dien008_dien007
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien009_dien008]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien009] DROP CONSTRAINT FK_dien009_dien008
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien010_dien009]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien010] DROP CONSTRAINT FK_dien010_dien009
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien011_dien010]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien011] DROP CONSTRAINT FK_dien011_dien010
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien012_dien011]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien012] DROP CONSTRAINT FK_dien012_dien011
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien013_dien012]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien013] DROP CONSTRAINT FK_dien013_dien012
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien016_dien015]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien016] DROP CONSTRAINT FK_dien016_dien015
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dich001_dien017]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dich001] DROP CONSTRAINT FK_dich001_dien017
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien018_dien017]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien018] DROP CONSTRAINT FK_dien018_dien017
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien019_dien017]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien019] DROP CONSTRAINT FK_dien019_dien017
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien021_dien017]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien021] DROP CONSTRAINT FK_dien021_dien017
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien022_dien017]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien022] DROP CONSTRAINT FK_dien022_dien017
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien020_dien019]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien020] DROP CONSTRAINT FK_dien020_dien019
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien022_dien021]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien022] DROP CONSTRAINT FK_dien022_dien021
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[FK_dien031_dien030]') and OBJECTPROPERTY(id, N'IsForeignKey') = 1)
ALTER TABLE [dbo].[dien031] DROP CONSTRAINT FK_dien031_dien030
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[Apem_05]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[Apem_05]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[TglSekarang]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[TglSekarang]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh001]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh001]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh002]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh002]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh003]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh003]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh004]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh004]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh005]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh005]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[trinh006]') and OBJECTPROPERTY(id, N'IsProcedure') = 1)
drop procedure [dbo].[trinh006]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich001]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich001]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich002]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich002]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich003]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich003]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich004]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich004]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich005]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich005]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich006]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich006]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dich007]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dich007]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien001]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien001]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien002]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien002]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien003]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien003]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien004]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien004]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien005]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien005]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien006]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien006]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien007]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien007]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien008]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien008]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien009]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien009]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien010]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien010]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien011]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien011]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien012]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien012]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien013]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien013]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien014]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien014]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien015]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien015]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien016]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien016]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien017]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien017]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien018]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien018]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien019]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien019]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien020]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien020]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien021]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien021]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien022]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien022]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien023]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien023]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien024]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien024]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien025]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien025]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien026]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien026]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien027]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien027]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien028]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien028]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien029]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien029]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien030]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien030]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien031]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien031]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien032]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien032]
GO

if exists (select * from dbo.sysobjects where id = object_id(N'[dbo].[dien033]') and OBJECTPROPERTY(id, N'IsUserTable') = 1)
drop table [dbo].[dien033]
GO

CREATE TABLE [dbo].[dich001] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL ,
	[dien018_01] [tinyint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dich001_01] [tinyint] NOT NULL ,
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [tinyint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dich001_02] [money] NOT NULL ,
	[dien014_01] [tinyint] NOT NULL ,
	[dich001_03] [money] NOT NULL ,
	[dich001_04] [money] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich002] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dich002_01] [tinyint] NOT NULL ,
	[dich002_02] [tinyint] NOT NULL ,
	[dich002_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich002_04] [datetime] NOT NULL ,
	[dich002_05] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich002_06] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich002_07] [varchar] (155) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_01] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_02] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_03] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich002_08] [varchar] (20) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich002_09] [datetime] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich003] (
	[dien001_01] [smallint] NOT NULL ,
	[dich002_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich003_01] [tinyint] NOT NULL ,
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [tinyint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dich003_02] [money] NOT NULL ,
	[dien014_01] [tinyint] NOT NULL ,
	[dich003_03] [money] NOT NULL ,
	[dien014_03] [tinyint] NOT NULL ,
	[dich003_04] [money] NOT NULL ,
	[dich003_05] [money] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich004] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dich004_01] [tinyint] NOT NULL ,
	[dich004_02] [tinyint] NOT NULL ,
	[dich004_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich004_04] [datetime] NOT NULL ,
	[dich004_05] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich004_06] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich004_07] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dich004_08] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_01] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_02] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_03] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich005] (
	[dien001_01] [smallint] NOT NULL ,
	[dich004_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich005_01] [tinyint] NOT NULL ,
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [tinyint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dich005_02] [money] NOT NULL ,
	[dien014_01] [tinyint] NOT NULL ,
	[dien015_01] [smallint] NULL ,
	[dien021_01] [smallint] NULL ,
	[dien016_01] [smallint] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich006] (
	[dien001_01] [smallint] NOT NULL ,
	[dich004_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich006_01] [tinyint] NOT NULL ,
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [tinyint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dich006_02] [money] NOT NULL ,
	[dien014_01] [tinyint] NOT NULL ,
	[dich006_03] [money] NOT NULL ,
	[dich006_04] [money] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dich007] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL ,
	[dien018_01] [tinyint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dich007_01] [tinyint] NOT NULL ,
	[dich007_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dich007_03] [datetime] NOT NULL ,
	[dich007_04] [tinyint] NOT NULL ,
	[dich007_05] [tinyint] NOT NULL ,
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [tinyint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dich007_06] [money] NOT NULL ,
	[dich007_07] [money] NOT NULL ,
	[dich007_08] [money] NOT NULL ,
	[dich007_09] [money] NOT NULL ,
	[dich007_10] [money] NOT NULL ,
	[dich007_11] [money] NOT NULL ,
	[dich007_12] [money] NOT NULL ,
	[dich007_13] [money] NOT NULL ,
	[dich007_14] [money] NOT NULL ,
	[dich007_15] [money] NOT NULL ,
	[dich007_16] [money] NOT NULL ,
	[dich007_17] [money] NOT NULL ,
	[dich007_18] [tinyint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien001] (
	[dien001_01] [smallint] NOT NULL ,
	[dien001_02] [varchar] (200) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien001_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien001_04] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien001_05] [tinyint] NOT NULL ,
	[dien001_06] [tinyint] NOT NULL ,
	[dien001_07] [image] NULL ,
	[dien001_08] [varchar] (200) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien001_09] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien001_10] [varchar] (2) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien001_11] [varchar] (4) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien002] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien002_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien003] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien003_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien003_03] [tinyint] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien004] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien004_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien005] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien005_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien006] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien006_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien007] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien007_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien008] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien008_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien008_03] [varchar] (1) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien009] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien009_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien010] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien010_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien011] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien011_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien011_03] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien012] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [smallint] NOT NULL ,
	[dien012_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien012_03] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien013] (
	[dien006_01] [tinyint] NOT NULL ,
	[dien007_01] [tinyint] NOT NULL ,
	[dien008_01] [tinyint] NOT NULL ,
	[dien009_01] [tinyint] NOT NULL ,
	[dien010_01] [tinyint] NOT NULL ,
	[dien011_01] [tinyint] NOT NULL ,
	[dien012_01] [smallint] NOT NULL ,
	[dien013_01] [tinyint] NOT NULL ,
	[dien013_02] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien013_03] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien013_04] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien013_05] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien013_06] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien013_07] [datetime] NULL ,
	[dien033_01] [tinyint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien014] (
	[dien014_01] [tinyint] NOT NULL ,
	[dien014_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien015] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien015_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien016] (
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL ,
	[dien016_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien017] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien017_01] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien017_02] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien017_03] [varchar] (75) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien017_04] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien018] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien018_01] [tinyint] NOT NULL ,
	[dien018_02] [varchar] (75) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien018_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien018_04] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien018_05] [varchar] (75) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien019] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dien019_02] [varchar] (75) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien019_03] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien020] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien019_01] [tinyint] NOT NULL ,
	[dien020_01] [tinyint] NOT NULL ,
	[dien020_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_03] [varchar] (21) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien020_04] [varchar] (75) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien021] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien015_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien002_01_a] [tinyint] NOT NULL ,
	[dien003_01_a] [tinyint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien022] (
	[dien001_01] [smallint] NOT NULL ,
	[dien002_01] [tinyint] NOT NULL ,
	[dien003_01] [tinyint] NOT NULL ,
	[dien004_01] [tinyint] NOT NULL ,
	[dien005_01] [smallint] NOT NULL ,
	[dien015_01] [smallint] NOT NULL ,
	[dien021_01] [smallint] NOT NULL ,
	[dien016_01] [smallint] NOT NULL ,
	[dien016_02] [varchar] (255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien018_01] [tinyint] NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien023] (
	[dien023_01] [tinyint] NOT NULL ,
	[dien023_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien023_03] [datetime] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien024] (
	[dien024_01] [datetime] NOT NULL ,
	[dien024_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien024_03] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien024_04] [smallint] NOT NULL ,
	[dien024_05] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien024_06] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien025] (
	[dien025_01] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien025_02] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien025_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien025_04] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien025_05] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien025_06] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien025_07] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NULL ,
	[dien025_08] [datetime] NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien026] (
	[dien026_01] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien026_02] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien026_03] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien027] (
	[dien027_01] [smallint] NOT NULL ,
	[dien027_02] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien027_03] [varchar] (4) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien027_04] [varchar] (1) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien028] (
	[dien028_01] [smallint] NOT NULL ,
	[dien028_02] [varchar] (20) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien028_03] [varchar] (4) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien028_04] [varchar] (1) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien029] (
	[dien029_01] [smallint] NOT NULL ,
	[dien029_02] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien029_03] [tinyint] NOT NULL ,
	[dien029_04] [tinyint] NOT NULL ,
	[dien029_05] [smallint] NOT NULL ,
	[dien029_06] [smallint] NOT NULL ,
	[dien029_07] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien030] (
	[dien030_01] [tinyint] NOT NULL ,
	[dien030_02] [varchar] (25) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien031] (
	[dien030_01] [tinyint] NOT NULL ,
	[dien031_01] [tinyint] NOT NULL ,
	[dien031_02] [varchar] (5) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien031_03] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien032] (
	[dien032_01] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_02] [varchar] (200) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_03] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_04] [varchar] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_05] [varchar] (200) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_06] [datetime] NOT NULL ,
	[dien032_07] [datetime] NOT NULL ,
	[dien032_08] [varchar] (2) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL ,
	[dien032_09] [varchar] (4) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL 
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[dien033] (
	[dien033_01] [tinyint] NOT NULL ,
	[dien033_02] [tinyint] NOT NULL ,
	[dien014_01] [tinyint] NOT NULL ,
	[dien033_03] [tinyint] NOT NULL ,
	[dien014_01_1] [tinyint] NOT NULL ,
	[dien033_04] [tinyint] NOT NULL ,
	[dien033_05] [varchar] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL 
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[dich001] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich001] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01],
		[dien016_01],
		[dien018_01],
		[dien019_01],
		[dich001_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich002] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich002] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dich002_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich003] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich003] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dich002_03],
		[dich003_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich004] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich004] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dich004_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich005] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich005] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dich004_03],
		[dich005_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich006] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich006] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dich004_03],
		[dich006_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich007] WITH NOCHECK ADD 
	CONSTRAINT [PK_dich007] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01],
		[dien016_01],
		[dien019_01],
		[dich007_01],
		[dich007_02],
		[dich007_04],
		[dich007_05]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien001] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien001] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien002] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien002] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien003] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien003] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01],
		[dien003_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien004] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien004] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01],
		[dien003_01],
		[dien004_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien005] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien005] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien006] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien006] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien007] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien007] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien008] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien008] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien009] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien009] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien010] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien010] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien011] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien011] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien012] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien012] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01],
		[dien012_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien013] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien013] PRIMARY KEY  CLUSTERED 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01],
		[dien012_01],
		[dien013_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien014] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien014] PRIMARY KEY  CLUSTERED 
	(
		[dien014_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien015] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien015] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01],
		[dien003_01],
		[dien015_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien016] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien016] PRIMARY KEY  CLUSTERED 
	(
		[dien002_01],
		[dien003_01],
		[dien015_01],
		[dien016_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien017] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien017] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien018] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien018] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien018_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien019] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien019] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien019_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien020] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien020] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien019_01],
		[dien020_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien021] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien021] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien022] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien022] PRIMARY KEY  CLUSTERED 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01],
		[dien016_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien023] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien023] PRIMARY KEY  CLUSTERED 
	(
		[dien023_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien025] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien025] PRIMARY KEY  CLUSTERED 
	(
		[dien025_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien026] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien026] PRIMARY KEY  CLUSTERED 
	(
		[dien026_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien027] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien027] PRIMARY KEY  CLUSTERED 
	(
		[dien027_01],
		[dien027_02],
		[dien027_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien028] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien028] PRIMARY KEY  CLUSTERED 
	(
		[dien028_01],
		[dien028_02],
		[dien028_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien029] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien029] PRIMARY KEY  CLUSTERED 
	(
		[dien029_01],
		[dien029_02],
		[dien029_03],
		[dien029_04],
		[dien029_05],
		[dien029_06]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien030] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien030] PRIMARY KEY  CLUSTERED 
	(
		[dien030_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien031] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien031] PRIMARY KEY  CLUSTERED 
	(
		[dien030_01],
		[dien031_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien032] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien032] PRIMARY KEY  CLUSTERED 
	(
		[dien032_01],
		[dien032_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dien033] WITH NOCHECK ADD 
	CONSTRAINT [PK_dien033] PRIMARY KEY  CLUSTERED 
	(
		[dien033_01]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich002] ADD 
	CONSTRAINT [IX_dich002] UNIQUE  NONCLUSTERED 
	(
		[dien001_01],
		[dich002_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich004] ADD 
	CONSTRAINT [IX_dich004] UNIQUE  NONCLUSTERED 
	(
		[dien001_01],
		[dich004_03]
	)  ON [PRIMARY] 
GO

ALTER TABLE [dbo].[dich001] ADD 
	CONSTRAINT [FK_dich001_dien017] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) REFERENCES [dbo].[dien017] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	)
GO

ALTER TABLE [dbo].[dich003] ADD 
	CONSTRAINT [FK_dich003_dich002] FOREIGN KEY 
	(
		[dien001_01],
		[dich002_03]
	) REFERENCES [dbo].[dich002] (
		[dien001_01],
		[dich002_03]
	)
GO

ALTER TABLE [dbo].[dich005] ADD 
	CONSTRAINT [FK_dich005_dich004] FOREIGN KEY 
	(
		[dien001_01],
		[dich004_03]
	) REFERENCES [dbo].[dich004] (
		[dien001_01],
		[dich004_03]
	)
GO

ALTER TABLE [dbo].[dich006] ADD 
	CONSTRAINT [FK_dich006_dich004] FOREIGN KEY 
	(
		[dien001_01],
		[dich004_03]
	) REFERENCES [dbo].[dich004] (
		[dien001_01],
		[dich004_03]
	)
GO

ALTER TABLE [dbo].[dien003] ADD 
	CONSTRAINT [FK_dien003_dien002] FOREIGN KEY 
	(
		[dien002_01]
	) REFERENCES [dbo].[dien002] (
		[dien002_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien004] ADD 
	CONSTRAINT [FK_dien004_dien003] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01]
	) REFERENCES [dbo].[dien003] (
		[dien002_01],
		[dien003_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien005] ADD 
	CONSTRAINT [FK_dien005_dien004] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01],
		[dien004_01]
	) REFERENCES [dbo].[dien004] (
		[dien002_01],
		[dien003_01],
		[dien004_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien007] ADD 
	CONSTRAINT [FK_dien007_dien006] FOREIGN KEY 
	(
		[dien006_01]
	) REFERENCES [dbo].[dien006] (
		[dien006_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien008] ADD 
	CONSTRAINT [FK_dien008_dien007] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01]
	) REFERENCES [dbo].[dien007] (
		[dien006_01],
		[dien007_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien009] ADD 
	CONSTRAINT [FK_dien009_dien008] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01]
	) REFERENCES [dbo].[dien008] (
		[dien006_01],
		[dien007_01],
		[dien008_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien010] ADD 
	CONSTRAINT [FK_dien010_dien009] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01]
	) REFERENCES [dbo].[dien009] (
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien011] ADD 
	CONSTRAINT [FK_dien011_dien010] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01]
	) REFERENCES [dbo].[dien010] (
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien012] ADD 
	CONSTRAINT [FK_dien012_dien011] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01]
	) REFERENCES [dbo].[dien011] (
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien013] ADD 
	CONSTRAINT [FK_dien013_dien012] FOREIGN KEY 
	(
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01],
		[dien012_01]
	) REFERENCES [dbo].[dien012] (
		[dien006_01],
		[dien007_01],
		[dien008_01],
		[dien009_01],
		[dien010_01],
		[dien011_01],
		[dien012_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien015] ADD 
	CONSTRAINT [FK_dien015_dien003] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01]
	) REFERENCES [dbo].[dien003] (
		[dien002_01],
		[dien003_01]
	)
GO

ALTER TABLE [dbo].[dien016] ADD 
	CONSTRAINT [FK_dien016_dien003] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01]
	) REFERENCES [dbo].[dien003] (
		[dien002_01],
		[dien003_01]
	),
	CONSTRAINT [FK_dien016_dien015] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01],
		[dien015_01]
	) REFERENCES [dbo].[dien015] (
		[dien002_01],
		[dien003_01],
		[dien015_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien017] ADD 
	CONSTRAINT [FK_dien017_dien001] FOREIGN KEY 
	(
		[dien001_01]
	) REFERENCES [dbo].[dien001] (
		[dien001_01]
	) ON UPDATE CASCADE ,
	CONSTRAINT [FK_dien017_dien003] FOREIGN KEY 
	(
		[dien002_01],
		[dien003_01]
	) REFERENCES [dbo].[dien003] (
		[dien002_01],
		[dien003_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien018] ADD 
	CONSTRAINT [FK_dien018_dien001] FOREIGN KEY 
	(
		[dien001_01]
	) REFERENCES [dbo].[dien001] (
		[dien001_01]
	) ON UPDATE CASCADE ,
	CONSTRAINT [FK_dien018_dien017] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) REFERENCES [dbo].[dien017] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	)
GO

ALTER TABLE [dbo].[dien019] ADD 
	CONSTRAINT [FK_dien019_dien017] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) REFERENCES [dbo].[dien017] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien020] ADD 
	CONSTRAINT [FK_dien020_dien019] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien019_01]
	) REFERENCES [dbo].[dien019] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien019_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien021] ADD 
	CONSTRAINT [FK_dien021_dien017] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) REFERENCES [dbo].[dien017] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien022] ADD 
	CONSTRAINT [FK_dien022_dien017] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	) REFERENCES [dbo].[dien017] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01]
	),
	CONSTRAINT [FK_dien022_dien021] FOREIGN KEY 
	(
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01]
	) REFERENCES [dbo].[dien021] (
		[dien001_01],
		[dien002_01],
		[dien003_01],
		[dien004_01],
		[dien005_01],
		[dien015_01],
		[dien021_01]
	) ON UPDATE CASCADE 
GO

ALTER TABLE [dbo].[dien031] ADD 
	CONSTRAINT [FK_dien031_dien030] FOREIGN KEY 
	(
		[dien030_01]
	) REFERENCES [dbo].[dien030] (
		[dien030_01]
	)
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

/****** Encrypted object is not transferable, and script can not be generated. ******/

GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE TglSekarang
--WITH ENCRYPTION
AS
  SELECT GETDATE() AS TglSekarang, Year(GETDATE()) AS Tahun
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE trinh001 @dien002_01 varchar(4)
--WITH ENCRYPTION
AS
/*
DECLARE @dien002_01 varchar(4)
SET @dien002_01 = '2014'
*/

SELECT     A.dien002_01, B.dien003_01, C.dien004_01, D.dien005_01,
	   A.dien002_02, B.dien003_02, C.dien004_02, D.dien005_02,
	   CONVERT(varchar, A.dien002_01) AS dien002_001,
	   CONVERT(varchar, A.dien002_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien003_01), 2) AS dien003_001,
	   CONVERT(varchar, A.dien002_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien003_01), 2) + ' . ' + CONVERT(varchar, C.dien004_01) AS dien004_001,
	   CONVERT(varchar, A.dien002_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien003_01), 2) + ' . ' + CONVERT(varchar, C.dien004_01) + ' . ' + CONVERT(varchar, D.dien005_01) AS dien005_001
	
FROM       dien002 A INNER JOIN
           dien003 B ON A.dien002_01 = B.dien002_01 INNER JOIN
           dien004 C ON B.dien002_01 = C.dien002_01 AND B.dien003_01 = C.dien003_01 INNER JOIN
           dien005 D ON C.dien002_01 = D.dien002_01 AND C.dien003_01 = D.dien003_01 AND C.dien004_01 = D.dien004_01
ORDER BY A.dien002_01, B.dien003_01, C.dien004_01, D.dien005_01
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE trinh002 @dien002_01 varchar(4)
--WITH ENCRYPTION
AS
/*
DECLARE @dien002_01 varchar(4)
SET @dien002_01 = '2014'
*/

SELECT 
  a.dien001_01,
  a.dien001_09,
  a.dien001_07,
  b.dien002_01,
  b.dien002_02,
  c.dien003_01,
  c.dien003_02,
  d.dien004_01,
  d.dien004_02,
  e.dien005_01,
  e.dien005_02,
  f.dien018_01,
  f.dien018_02

FROM
  dien002 b INNER JOIN dien003 c ON b.dien002_01 = c.dien002_01
  INNER JOIN dien004 d ON c.dien002_01 = d.dien002_01
  AND c.dien003_01 = d.dien003_01
  INNER JOIN dien005 e ON d.dien002_01 = e.dien002_01
  AND d.dien003_01 = e.dien003_01
  AND d.dien004_01 = e.dien004_01
  INNER JOIN dien018 f ON e.dien002_01 = f.dien002_01
  AND e.dien003_01 = f.dien003_01
  AND e.dien004_01 = f.dien004_01
  AND e.dien005_01 = f.dien005_01,
  dien001 a


GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE trinh003 @dien001_01 varchar(4)
--WITH ENCRYPTION
AS
/*
DECLARE @dien001_01 varchar(4)
SET @dien001_01 = '2013'
*/

SELECT     A.dien006_01, B.dien007_01, C.dien008_01, D.dien009_01, E.dien010_01, F.dien011_01, 
           G.dien012_01, H.dien013_01, A.dien006_02, B.dien007_02, C.dien008_02, 
           D.dien009_02, E.dien010_02, F.dien011_02, F.dien011_03, G.dien012_02, 
           G.dien012_03, H.dien013_02, H.dien013_03,
	   CONVERT(varchar, A.dien006_01) AS dien006_001,
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) AS dien007_001,
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) AS dien008_001, 
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) + ' . ' + CONVERT(varchar, D.dien009_01) AS dien009_001, 
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) + ' . ' + CONVERT(varchar, D.dien009_01)  + ' . ' + CONVERT(varchar, E.dien010_01) AS dien010_001, 
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) + ' . ' + CONVERT(varchar, D.dien009_01)  + ' . ' + CONVERT(varchar, E.dien010_01)  + ' . ' + CONVERT(varchar, F.dien011_01) AS dien011_001 , 
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) + ' . ' + CONVERT(varchar, D.dien009_01)  + ' . ' + CONVERT(varchar, E.dien010_01)  + ' . ' + CONVERT(varchar, F.dien011_01) + ' . ' + CONVERT(varchar, G.dien012_01) AS dien012_001 , 
	   CONVERT(varchar, A.dien006_01) + ' . ' + RIGHT('00' + CONVERT(varchar, B.dien007_01), 2) + ' . ' + CONVERT(varchar, C.dien008_01) + ' . ' + CONVERT(varchar, D.dien009_01)  + ' . ' + CONVERT(varchar, E.dien010_01)  + ' . ' + CONVERT(varchar, F.dien011_01) + ' . ' + CONVERT(varchar, G.dien012_01) + ' . ' + CONVERT(varchar, H.dien013_01) AS dien013_001 , 
	   I.dien001_09, I.dien001_02, I.dien001_07
FROM       dien012 G LEFT OUTER JOIN
           dien013 H ON G.dien006_01 = H.dien006_01 AND G.dien007_01 = H.dien007_01 AND G.dien008_01 = H.dien008_01 AND G.dien009_01 = H.dien009_01 AND G.dien010_01 = H.dien010_01 AND G.dien011_01 = H.dien011_01 AND G.dien012_01 = H.dien012_01 LEFT OUTER JOIN
           dien011 F ON G.dien006_01 = F.dien006_01 AND G.dien007_01 = F.dien007_01 AND G.dien008_01 = F.dien008_01 AND G.dien009_01 = F.dien009_01 AND G.dien010_01 = F.dien010_01 AND G.dien011_01 = F.dien011_01 RIGHT OUTER JOIN
           dien010 E ON F.dien006_01 = E.dien006_01 AND F.dien007_01 = E.dien007_01 AND F.dien008_01 = E.dien008_01 AND F.dien009_01 = E.dien009_01 AND F.dien010_01 = E.dien010_01 RIGHT OUTER JOIN
           dien009 D ON E.dien006_01 = D.dien006_01 AND E.dien007_01 = D.dien007_01 AND E.dien008_01 = D.dien008_01 AND E.dien009_01 = D.dien009_01 RIGHT OUTER JOIN
           dien008 C ON D.dien006_01 = C.dien006_01 AND D.dien007_01 = C.dien007_01 AND D.dien008_01 = C.dien008_01 RIGHT OUTER JOIN
           dien007 B ON C.dien006_01 = B.dien006_01 AND C.dien007_01 = B.dien007_01 RIGHT OUTER JOIN
           dien006 A ON B.dien006_01 = A.dien006_01,
   	   (
	   SELECT dien001_09, dien001_02, dien001_07
	   FROM dien001
	   WHERE (dien001_01 = @dien001_01)
	   ) I
ORDER BY I.dien001_09, A.dien006_01, B.dien007_01, C.dien008_01, D.dien009_01, E.dien010_01, 
	 F.dien011_01, G.dien012_01, H.dien013_01
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE trinh004 @Tahun varchar(4), @Kd_Urusan varchar(3), @Kd_Bidang varchar(3), @Kd_Unit varchar(3), @Kd_Sub varchar(3), 
	@Kd_Bidang1 varchar(3), @Kd_Gudang varchar(3), @D1 datetime, @D2 datetime
--WITH ENCRYPTION
AS

/*
DECLARE @Tahun varchar(4), @Kd_Urusan varchar(3), @Kd_Bidang varchar(3), @Kd_Unit varchar(3), @Kd_Sub varchar(3), 
	@Kd_Bidang1 varchar(3), @Kd_Gudang varchar(3), @D1 datetime, @D2 datetime
SET @Tahun = '2014'
SET @Kd_Urusan = '1'
SET @Kd_Bidang = '1'
SET @Kd_Unit = '1'
SET @Kd_Sub = '1'
SET @Kd_Bidang1 = '1'
SET @Kd_Gudang = '1'
SET @D1 = '20140101'
SET @D2 = '20141231'
*/
	IF ISNULL(@Kd_Urusan, '') = '' SET @Kd_Urusan = '%'
	IF ISNULL(@Kd_Bidang, '') = '' SET @Kd_Bidang = '%'
	IF ISNULL(@Kd_Unit, '') = '' SET @Kd_Unit = '%'
	IF ISNULL(@Kd_Sub, '') = '' SET @Kd_Sub = '%'
	IF ISNULL(@Kd_Bidang1, '') = '' SET @Kd_Bidang1 = '%'
	IF ISNULL(@Kd_Gudang, '') = '' SET @Kd_Gudang = '%'


SELECT A.dien001_01,
	A.dien002_01,
	A.dien003_01,
	A.dien004_01,
	A.dien005_01,
	A.dien015_01,
	A.dien021_01,
	A.dien016_01,
	A.dien019_01,
	A.dich002_01,
	A.dich002_02,
	A.dich002_03,
	A.dich002_04,
	A.dich002_05,
	A.dich002_06,
	A.dich002_07,
	A.dien020_01,
	A.dien020_02,
	A.dien020_03,
	A.dich002_08,
	A.dich002_09,
	B.dich003_01,
	B.dien006_01,
	B.dien007_01,
	B.dien008_01,
	B.dien009_01,
	B.dien010_01,
	B.dien011_01,
	B.dien012_01,
	B.dien013_01,
	B.dich003_02,
	B.dien014_01,
	B.dich003_03,
	B.dien014_03,
	B.dich003_04,
	B.dich003_05,
	C.dien001_03,
	C.dien001_04,
	C.dien001_09,
	D.dien017_01,
	D.dien017_02,
	D.dien017_03,
	E.dien018_01,
	E.dien018_02,
	E.dien018_03,
	E.dien018_04,
	E.dien018_05,
	F.dien019_01,
	F.dien019_02,
	F.dien019_03,
	G.dien020_01,
	G.dien020_02,
	G.dien020_03,
	G.dien020_04 

FROM 	dich002 A INNER JOIN
	dich003 B ON A.dien001_01 = B.dien001_01 AND  A.dich002_03 = B.dich002_03 INNER JOIN
	dien001 C ON A.dien001_01 = C.dien001_01 INNER JOIN
	dien017 D ON A.dien001_01 = D.dien001_01 AND A.dien002_01 = D.dien002_01 AND A.dien003_01 = D.dien003_01
		    AND A.dien004_01 = D.dien004_01 AND A.dien005_01 = D.dien005_01 INNER JOIN
	dien018 E ON A.dien001_01 = E.dien001_01 AND A.dien002_01 = E.dien002_01 AND A.dien003_01 = E.dien003_01
		    AND A.dien004_01 = E.dien004_01 AND A.dien005_01 = E.dien005_01 INNER JOIN
	dien019 F ON A.dien001_01 = F.dien001_01 AND A.dien002_01 = F.dien002_01 AND A.dien003_01 = F.dien003_01
		    AND A.dien004_01 = F.dien004_01 AND A.dien005_01 = F.dien005_01 INNER JOIN
	dien020 G ON A.dien001_01 = G.dien001_01 AND A.dien002_01 = G.dien002_01 AND A.dien003_01 = G.dien003_01
		    AND A.dien004_01 = G.dien004_01 AND A.dien005_01 = G.dien005_01 AND F.dien019_01 = G.dien019_01

WHERE A.dien001_01 = @Tahun  AND  A.dien002_01  LIKE @Kd_Urusan AND A.dien003_01 LIKE @Kd_Bidang AND A.dien004_01 LIKE @Kd_Unit 
	AND A.dien005_01 LIKE @Kd_Sub AND E.dien018_01 LIKE @Kd_Bidang1  AND F.dien019_01 LIKE @Kd_Gudang AND A.dich002_04 BETWEEN @D1 AND @D2
	AND G.dien020_01 = 1
GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO

CREATE PROCEDURE trinh005 @dien001_01 varchar(4), @dien002_01 varchar(1), @dien003_01 varchar(3), @dien004_01 varchar(3), @dien005_01 varchar(3), @dien018_01 Varchar(2), @dien019_01 varchar(2), @T1 datetime, @T2 datetime
--WITH ENCRYPTION
AS

/*
DECLARE @dien001_01 varchar(4), @dien002_01 varchar(1), @dien003_01 varchar(3), @dien004_01 varchar(3), @dien005_01 varchar(3), @dien018_01 Varchar(2), @dien019_01 varchar(2), @T1 datetime, @T2 datetime

SET @dien001_01 = '2014'     
SET @dien002_01 = '1'	     
SET @dien003_01 = '1'        
SET @dien004_01 = '1'        
SET @dien005_01 = '1'        
SET @dien018_01 = '2'        
SET @dien019_01 = '1'        
SET @T1         = '20140101' 
SET @T2         = '20141231' 
*/
	IF ISNULL(@dien002_01, '') = '' SET @dien002_01 = '%'
	IF ISNULL(@dien003_01, '') = '' SET @dien003_01 = '%'
	IF ISNULL(@dien004_01, '') = '' SET @dien004_01 = '%'
	IF ISNULL(@dien005_01, '') = '' SET @dien005_01 = '%'
	IF ISNULL(@dien018_01, '') = '' SET @dien018_01 = '%'
	IF ISNULL(@dien019_01, '') = '' SET @dien019_01 = '%'

SELECT     A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, 
	   A.dien015_01, A.dien021_01, A.dien016_01, A.dien019_01, 
	   A.dich004_01, A.dich004_02, A.dich004_03, A.dich004_04, A.dich004_05,
	   A.dich004_06, A.dich004_07, A.dich004_08, A.dich006_01, 
	   A.dien006_01, A.dien007_01, A.dien008_01, A.dien009_01, A.dien010_01, A.dien011_01, A.dien012_01,
           A.dien013_01,  A.dich006_02, A.dich006_03, A.dich006_04, (A.dich006_02 * A.dich006_04) AS dich006_02_04,
           CONVERT(varchar, A.dien006_01) + ' . ' + CONVERT(varchar, A.dien007_01) + ' . ' + CONVERT(varchar, A.dien008_01) + ' . ' + CONVERT(varchar, A.dien009_01)  + ' . ' + CONVERT(varchar, A.dien010_01)  + ' . ' + CONVERT(varchar, A.dien011_01) + ' . ' + CONVERT(varchar, A.dien012_01) + ' . ' + CONVERT(varchar, A.dien013_01) AS dien013_Gab, 
	   A.dien013_03,

	   B.dien018_01, B.dien018_02, B.dien018_03, B.dien018_04, 
           B.dien018_05, B.dien019_01, B.dien019_02, B.dien019_03, B.dien020_01, 
           B.dien020_02, B.dien020_03, B.dien020_04,

	   C.dien002_02, C.dien003_02, C.dien004_02, C.dien005_02,

	   D.dien001_02, D.dien001_03, D.dien001_04
FROM (
--Pengeluaran - Pengeluaran_Rinc
	SELECT     A.dien001_01, A.dich004_03, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, /*A.dien018_01*/ A.dien019_01, A.dich004_01, A.dich004_02, A.dich004_04, 
           	   A.dich004_05, A.dich004_06, A.dich004_07, A.dich004_08, A.dien020_01, A.dien020_02, A.dien020_03, B.dich006_01, B.dien006_01, B.dien007_01, B.dien008_01, 
	           B.dien009_01, B.dien010_01, B.dien011_01, B.dien012_01, B.dien013_01, B.dich006_02, B.dich006_03, B.dich006_04, /*B.dich006_05*/ B.dien015_01, B.dien021_01, 
	           B.dien016_01, C.dien013_03
	FROM       dich004 A INNER JOIN
	           dich006 B ON A.dien001_01 = B.dien001_01 AND A.dich004_03 = B.dich004_03 INNER JOIN
	           dien013 C ON B.dien006_01 = C.dien006_01 AND B.dien007_01 = C.dien007_01 AND B.dien008_01 = C.dien008_01 AND B.dien009_01 = C.dien009_01 AND B.dien010_01 = C.dien010_01 AND B.dien011_01 = C.dien011_01 AND B.dien012_01 = C.dien012_01 AND B.dien013_01 = C.dien013_01
	   )A INNER JOIN
      	   (
--Bidang - Penyimpanan - Petugas Penyimpanan
	SELECT     A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, A.dien018_01, A.dien018_02, A.dien018_03, A.dien018_04, A.dien018_05, B.dien019_01, 
	           B.dien019_02, B.dien019_03, C.dien020_01, C.dien020_02, C.dien020_03, C.dien020_04
	FROM       dien018 A INNER JOIN
	           dien019 B ON A.dien001_01 = B.dien001_01 AND A.dien002_01 = B.dien002_01 AND A.dien003_01 = B.dien003_01 AND A.dien004_01 = B.dien004_01 AND A.dien005_01 = B.dien005_01 /*AND A.dien018_01 = B.dien018_01*/ INNER JOIN
	           dien020 C ON B.dien001_01 = C.dien001_01 AND B.dien002_01 = C.dien002_01 AND B.dien003_01 = C.dien003_01 AND B.dien004_01 = C.dien004_01 AND B.dien005_01 = C.dien005_01 AND /*B.dien018_01 = C.dien018_01 AND */B.dien019_01 = C.dien019_01	
      )B ON A.dien001_01 = B.dien001_01 AND A.dien002_01 = B.dien002_01 AND A.dien003_01 = B.dien003_01 AND A.dien004_01 = B.dien004_01 AND A.dien005_01 = B.dien005_01 AND /*A.dien018_01 = B.dien018_01 AND*/ A.dien019_01 = B.dien019_01 INNER JOIN
      ( 
-- Unit Organisasi
	SELECT     A.dien002_01, A.dien002_02, B.dien003_01, B.dien003_02, C.dien004_01, C.dien004_02, D.dien005_01, D.dien005_02
	FROM       dien002 A INNER JOIN
                   dien003 B ON A.dien002_01 = B.dien002_01 INNER JOIN
                   dien004 C ON B.dien002_01 = C.dien002_01 AND B.dien003_01 = C.dien003_01 INNER JOIN
                   dien005 D ON C.dien002_01 = D.dien002_01 AND C.dien003_01 = D.dien003_01 AND C.dien004_01 = D.dien004_01
      ) C ON A.dien002_01 = C.dien002_01 AND A.dien003_01 = C.dien003_01 AND A.dien004_01 = C.dien004_01 AND A.dien005_01 = C.dien005_01 INNER JOIN
      (
--Pemda
	SELECT     dien001_01, dien001_02, dien001_03, dien001_04, dien001_05, dien001_06, dien001_07
	FROM       dien001
       ) D ON A.dien001_01 = D.dien001_01

WHERE 	(A.dien001_01 = @dien001_01) AND (A.dien002_01 LIKE @dien002_01) AND (A.dien003_01 LIKE @dien003_01) AND (A.dien004_01 LIKE @dien004_01) AND (A.dien005_01 LIKE @dien005_01) 
	AND (B.dien018_01 LIKE @dien018_01) AND (A.dien019_01 LIKE @dien019_01) AND (A.dich004_04 BETWEEN @T1 AND @T2) AND B.dien020_01 = 1









GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

SET QUOTED_IDENTIFIER ON 
GO
SET ANSI_NULLS ON 
GO


CREATE PROCEDURE trinh006 @dien001_01 varchar(4), @dien002_01 varchar(1), @dien003_01 varchar(3), @dien004_01 varchar(3), @dien005_01 varchar(3), @dien018_01 Varchar(2), @dien019_01 varchar(2), @T1 datetime, @T2 datetime
--WITH ENCRYPTION
AS

/*
DECLARE @dien001_01 varchar(4), @dien002_01 varchar(1), @dien003_01 varchar(3), @dien004_01 varchar(3), @dien005_01 varchar(3), @dien018_01 Varchar(2), @dien019_01 varchar(2), @T1 datetime, @T2 datetime

SET @dien001_01 = '2014'
SET @dien002_01 = '1'	
SET @dien003_01 = '1'      
SET @dien004_01 = '1'      
SET @dien005_01 = '1'     
SET @dien018_01 = '2'    
SET @dien019_01 = '1'     
SET @T1         = '20140101' 
SET @T2         = '20141231' 
*/
	IF ISNULL(@dien002_01, '') = '' SET @dien002_01 = '%'
	IF ISNULL(@dien003_01, '') = '' SET @dien003_01 = '%'
	IF ISNULL(@dien004_01, '') = '' SET @dien004_01 = '%'
	IF ISNULL(@dien005_01, '') = '' SET @dien005_01 = '%'
	IF ISNULL(@dien018_01, '') = '' SET @dien018_01 = '%'
	IF ISNULL(@dien019_01, '') = '' SET @dien019_01 = '%'


SELECT A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, 
       A.dien019_01, A.dich002_04, A.dien006_01, A.dien007_01, B.dien008_01, A.dien009_01, 
       A.dien010_01, A.dien011_01, A.dien012_01, A.dien013_01, A.dich003_04, A.dich003_05, IsNull(A.dich006_04,0) AS dich006_04,
      (A.dich003_05 - IsNull(A.dich006_04,0))AS dich003_05_dich006_04,  B.dien013_02,

       C.dien018_01, C.dien018_02, C.dien018_03, C.dien018_04, 
       C.dien018_05, C.dien019_02, C.dien019_03, C.dien020_01, 
       C.dien020_02, C.dien020_03, C.dien020_04,

       D.dien002_02, D.dien003_02, D.dien004_02, D.dien005_02

    FROM
	(

		SELECT A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01,
		       A.dien019_01, A.dich002_04 , A.dien006_01, A.dien007_01,  A.dien009_01, 
		       A.dien010_01, A.dien011_01, A.dien012_01, A.dien013_01 , A.dich003_04, A.dich003_05, B.dich004_04, b.dich006_04
      		FROM				(
				SELECT   A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, A.dien015_01, A.dien021_01, A.dien016_01, A.dien019_01, A.dich002_03, A.dich002_04, 
				         B.dich003_01, B.dien006_01, B.dien007_01, B.dien008_01, B.dien009_01, B.dien010_01, B.dien011_01, B.dien012_01, B.dien013_01, B.dich003_02, B.dich003_03, 
				         B.dich003_04, B.dich003_05
				FROM     dich002 A INNER JOIN
				         dich003 B ON A.dien001_01 = B.dien001_01 AND A.dich002_03 = B.dich002_03
				)A  LEFT OUTER JOIN
				(
				SELECT  A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, A.dien019_01, B.dich004_03, A.dich004_01, A.dich004_02, 
				        A.dich004_04, B.dien006_01, B.dien007_01, B.dien008_01, B.dien009_01, B.dien010_01, B.dien011_01, B.dien012_01, B.dien013_01, 
					B.dich006_02, B.dich006_03, B.dich006_04
				FROM    dich004 A INNER JOIN
				        dich006 B ON A.dien001_01 = B.dien001_01 AND A.dich004_03 = B.dich004_03
			     )B ON A.dien001_01 = B.dien001_01 AND A.dien002_01 = B.dien002_01 AND A.dien003_01 = B.dien003_01 AND A.dien004_01 = B.dien004_01 AND A.dien005_01 = B.dien005_01 AND A.dien019_01 = B.dien019_01 AND
			           A.dich002_04 = B.dich004_04 AND A.dien006_01 = B.dien006_01 AND A.dien007_01 = B.dien007_01 AND  A.dien009_01 = B.dien009_01 AND A.dien010_01 = B.dien010_01 AND A.dien011_01 = B.dien011_01 AND A.dien012_01 = B.dien012_01 AND
				   A.dien013_01 = B.dien013_01
			          
	)A INNER JOIN
	(
	SELECT A.dien006_01, A.dien007_01, A.dien008_01, A.dien009_01, A.dien010_01, A.dien011_01, A.dien012_01, A.dien013_01, A.dien013_02
	FROM   dbo.dien013 A
	)B ON A.dien006_01 = B.dien006_01 AND A.dien007_01 = B.dien007_01 AND A.dien009_01 = B.dien009_01 AND A.dien010_01 = B.dien010_01 AND 
              A.dien011_01 = B.dien011_01 AND A.dien012_01 = B.dien012_01 AND A.dien013_01 = B.dien013_01 INNER JOIN	
   (
	--Bidang - Penyimpanan - Petugas Penyimpanan
	SELECT     A.dien001_01, A.dien002_01, A.dien003_01, A.dien004_01, A.dien005_01, A.dien018_01, A.dien018_02, A.dien018_03, A.dien018_04, A.dien018_05, B.dien019_01, 
	           B.dien019_02, B.dien019_03, C.dien020_01, C.dien020_02, C.dien020_03, C.dien020_04
	FROM       dbo.dien018 A INNER JOIN
	           dbo.dien019 B ON A.dien001_01 = B.dien001_01 AND A.dien002_01 = B.dien002_01 AND A.dien003_01 = B.dien003_01 AND A.dien004_01 = B.dien004_01 AND A.dien005_01 = B.dien005_01 INNER JOIN
	           dbo.dien020 C ON B.dien001_01 = C.dien001_01 AND B.dien002_01 = C.dien002_01 AND B.dien003_01 = C.dien003_01 AND B.dien004_01 = C.dien004_01 AND B.dien005_01 = C.dien005_01 AND B.dien019_01 = C.dien019_01	
      )C ON A.dien001_01 = C.dien001_01 AND A.dien002_01 = C.dien002_01 AND A.dien003_01 = C.dien003_01 AND A.dien004_01 = C.dien004_01 AND A.dien005_01 = C.dien005_01 AND A.dien019_01 = C.dien019_01 INNER JOIN
     (
-- Unit Organisasi
	SELECT     A.dien002_01, A.dien002_02, B.dien003_01, B.dien003_02, C.dien004_01, C.dien004_02, D.dien005_01, D.dien005_02
	FROM       dbo.dien002 A INNER JOIN
                   dbo.dien003 B ON A.dien002_01 = B.dien002_01 INNER JOIN
                   dbo.dien004 C ON B.dien002_01 = C.dien002_01 AND B.dien003_01 = C.dien003_01 INNER JOIN
                   dbo.dien005 D ON C.dien002_01 = D.dien002_01 AND C.dien003_01 = D.dien003_01 AND C.dien004_01 = D.dien004_01
      ) D ON A.dien002_01 = D.dien002_01 AND A.dien003_01 = D.dien003_01 AND A.dien004_01 = D.dien004_01 AND A.dien005_01 = D.dien005_01


WHERE 	(A.dien001_01 = @dien001_01) AND (A.dien002_01 LIKE @dien002_01) AND (A.dien003_01 LIKE @dien003_01) AND (A.dien004_01 LIKE @dien004_01) AND (A.dien005_01 LIKE @dien005_01) 
	AND (C.dien018_01 LIKE @dien018_01) AND (A.dien019_01 LIKE @dien019_01) AND (A.dich002_04 BETWEEN @T1 AND @T2) AND C.dien020_01 = 1



GO
SET QUOTED_IDENTIFIER OFF 
GO
SET ANSI_NULLS ON 
GO

