<?
//$sql = "SELECT *,
//FROM zdravi_homeopatika
//WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
//$result = $conn->query($sql);



$sql = "SELECT *,
CASE
WHEN abrotanum_2 = 0 THEN 'Ne'
WHEN abrotanum_2 = 1 THEN 'Abrotanum'
END AS abrotanum_2,
CASE
WHEN aconitum_napellus_3 = 0 THEN 'Ne'
WHEN aconitum_napellus_3 = 1 THEN 'Aconitum napellus'
END AS aconitum_napellus_3,
CASE
WHEN actaea_racemosa_4 = 0 THEN 'Ne'
WHEN actaea_racemosa_4 = 1 THEN 'Actaea racemosa'
END AS actaea_racemosa_4,
CASE
WHEN actaea_spicata_5 = 0 THEN 'Ne'
WHEN actaea_spicata_5 = 1 THEN 'Actaea spicata'
END AS actaea_spicata_5,
CASE
WHEN aesculus_hippocastanum_6 = 0 THEN 'Ne'
WHEN aesculus_hippocastanum_6 = 1 THEN 'Aesculus hippocastanum'
END AS aesculus_hippocastanum_6,
CASE
WHEN aethusa_cynapium_7 = 0 THEN 'Ne'
WHEN aethusa_cynapium_7 = 1 THEN 'Aethusa cynapium'
END AS aethusa_cynapium_7,
CASE
WHEN agaricus_muscarius_8 = 0 THEN 'Ne'
WHEN agaricus_muscarius_8 = 1 THEN 'Agaricus muscarius'
END AS agaricus_muscarius_8,
CASE
WHEN agnus_castus_9 = 0 THEN 'Ne'
WHEN agnus_castus_9 = 1 THEN 'Agnus castus'
END AS agnus_castus_9,
CASE
WHEN agraphis_nutans_10 = 0 THEN 'Ne'
WHEN agraphis_nutans_10 = 1 THEN 'Agraphis nutans'
END AS agraphis_nutans_10,
CASE
WHEN ailanthus_glandulosa_11 = 0 THEN 'Ne'
WHEN ailanthus_glandulosa_11 = 1 THEN 'Ailanthus glandulosa'
END AS ailanthus_glandulosa_11,
CASE
WHEN allium_cepa_12 = 0 THEN 'Ne'
WHEN allium_cepa_12 = 1 THEN 'Allium cepa'
END AS allium_cepa_12,
CASE
WHEN allium_sativum_13 = 0 THEN 'Ne'
WHEN allium_sativum_13 = 1 THEN 'Allium sativum'
END AS allium_sativum_13,
CASE
WHEN aloe_socotrina_14 = 0 THEN 'Ne'
WHEN aloe_socotrina_14 = 1 THEN 'Aloe socotrina'
END AS aloe_socotrina_14,
CASE
WHEN alumina_15 = 0 THEN 'Ne'
WHEN alumina_15 = 1 THEN 'Alumina'
END AS alumina_15,
CASE
WHEN ambra_grisea_16 = 0 THEN 'Ne'
WHEN ambra_grisea_16 = 1 THEN 'Ambra grisea'
END AS ambra_grisea_16,
CASE
WHEN ammonium_carbonicum_17 = 0 THEN 'Ne'
WHEN ammonium_carbonicum_17 = 1 THEN 'Ammonium carbonicum'
END AS ammonium_carbonicum_17,
CASE
WHEN ammonium_muriaticum_18 = 0 THEN 'Ne'
WHEN ammonium_muriaticum_18 = 1 THEN 'Ammonium muriaticum'
END AS ammonium_muriaticum_18,
CASE
WHEN amylium_nitrosum_19 = 0 THEN 'Ne'
WHEN amylium_nitrosum_19 = 1 THEN 'Amylium nitrosum'
END AS amylium_nitrosum_19,
CASE
WHEN anacardium_orientale_20 = 0 THEN 'Ne'
WHEN anacardium_orientale_20 = 1 THEN 'Anacardium orientale'
END AS anacardium_orientale_20,
CASE
WHEN anagallis_arvensis_21 = 0 THEN 'Ne'
WHEN anagallis_arvensis_21 = 1 THEN 'Anagallis arvensis'
END AS anagallis_arvensis_21,
CASE
WHEN antimonium_crudum_22 = 0 THEN 'Ne'
WHEN antimonium_crudum_22 = 1 THEN 'Antimonium crudum'
END AS antimonium_crudum_22,
CASE
WHEN antimonium_tartaricum_23 = 0 THEN 'Ne'
WHEN antimonium_tartaricum_23 = 1 THEN 'Antimonium tartaricum'
END AS antimonium_tartaricum_23,
CASE
WHEN apis_mellifica_24 = 0 THEN 'Ne'
WHEN apis_mellifica_24 = 1 THEN 'Apis mellifica'
END AS apis_mellifica_24,
CASE
WHEN aralia_racemosa_25 = 0 THEN 'Ne'
WHEN aralia_racemosa_25 = 1 THEN 'Aralia racemosa'
END AS aralia_racemosa_25,
CASE
WHEN aranea_diadema_26 = 0 THEN 'Ne'
WHEN aranea_diadema_26 = 1 THEN 'Aranea diadema'
END AS aranea_diadema_26,
CASE
WHEN argentum_nitricum_27 = 0 THEN 'Ne'
WHEN argentum_nitricum_27 = 1 THEN 'Argentum nitricum'
END AS argentum_nitricum_27,
CASE
WHEN arnica_montana_28 = 0 THEN 'Ne'
WHEN arnica_montana_28 = 1 THEN 'Arnica montana'
END AS arnica_montana_28,
CASE
WHEN arsenicum_album_29 = 0 THEN 'Ne'
WHEN arsenicum_album_29 = 1 THEN 'Arsenicum album'
END AS arsenicum_album_29,
CASE
WHEN arsenicum_iodatum_30 = 0 THEN 'Ne'
WHEN arsenicum_iodatum_30 = 1 THEN 'Arsenicum iodatum'
END AS arsenicum_iodatum_30,
CASE
WHEN arum_triphyllum_31 = 0 THEN 'Ne'
WHEN arum_triphyllum_31 = 1 THEN 'Arum triphyllum'
END AS arum_triphyllum_31,
CASE
WHEN asa_foetida_32 = 0 THEN 'Ne'
WHEN asa_foetida_32 = 1 THEN 'Asa foetida'
END AS asa_foetida_32,
CASE
WHEN aurum_metallicum_33 = 0 THEN 'Ne'
WHEN aurum_metallicum_33 = 1 THEN 'Aurum metallicum'
END AS aurum_metallicum_33,
CASE
WHEN aurum_muriaticum_natronatum_34 = 0 THEN 'Ne'
WHEN aurum_muriaticum_natronatum_34 = 1 THEN 'Aurum muriaticum natronatum'
END AS aurum_muriaticum_natronatum_34,
CASE
WHEN avena_sativa_35 = 0 THEN 'Ne'
WHEN avena_sativa_35 = 1 THEN 'Avena sativa'
END AS avena_sativa_35,
CASE
WHEN baryta_carbonica_36 = 0 THEN 'Ne'
WHEN baryta_carbonica_36 = 1 THEN 'Baryta carbonica'
END AS baryta_carbonica_36,
CASE
WHEN baryta_iodata_37 = 0 THEN 'Ne'
WHEN baryta_iodata_37 = 1 THEN 'Baryta iodata'
END AS baryta_iodata_37,
CASE
WHEN baryta_muriatica_38 = 0 THEN 'Ne'
WHEN baryta_muriatica_38 = 1 THEN 'Baryta muriatica'
END AS baryta_muriatica_38,
CASE
WHEN belladonna_39 = 0 THEN 'Ne'
WHEN belladonna_39 = 1 THEN 'Belladonna'
END AS belladonna_39,
CASE
WHEN bellis_perennis_40 = 0 THEN 'Ne'
WHEN bellis_perennis_40 = 1 THEN 'Bellis perennis'
END AS bellis_perennis_40,
CASE
WHEN benzoicum_acidum_41 = 0 THEN 'Ne'
WHEN benzoicum_acidum_41 = 1 THEN 'Benzoicum acidum'
END AS benzoicum_acidum_41,
CASE
WHEN berberis_vulgaris_42 = 0 THEN 'Ne'
WHEN berberis_vulgaris_42 = 1 THEN 'Berberis vulgaris'
END AS berberis_vulgaris_42,
CASE
WHEN bismuthum_43 = 0 THEN 'Ne'
WHEN bismuthum_43 = 1 THEN 'Bismuthum'
END AS bismuthum_43,
CASE
WHEN blatta_orientalis_44 = 0 THEN 'Ne'
WHEN blatta_orientalis_44 = 1 THEN 'Blatta orientalis'
END AS blatta_orientalis_44,
CASE
WHEN borax_45 = 0 THEN 'Ne'
WHEN borax_45 = 1 THEN 'Borax'
END AS borax_45,
CASE
WHEN bromum_46 = 0 THEN 'Ne'
WHEN bromum_46 = 1 THEN 'Bromum'
END AS bromum_46,
CASE
WHEN bryonia_47 = 0 THEN 'Ne'
WHEN bryonia_47 = 1 THEN 'Bryonia'
END AS bryonia_47,
CASE
WHEN bufo_rana_48 = 0 THEN 'Ne'
WHEN bufo_rana_48 = 1 THEN 'Bufo rana'
END AS bufo_rana_48,
CASE
WHEN cactus_grandiflorus_49 = 0 THEN 'Ne'
WHEN cactus_grandiflorus_49 = 1 THEN 'Cactus grandiflorus'
END AS cactus_grandiflorus_49,
CASE
WHEN cadmium_sulfuricum_50 = 0 THEN 'Ne'
WHEN cadmium_sulfuricum_50 = 1 THEN 'Cadmium sulfuricum'
END AS cadmium_sulfuricum_50,
CASE
WHEN caladium_seguinum_51 = 0 THEN 'Ne'
WHEN caladium_seguinum_51 = 1 THEN 'Caladium seguinum'
END AS caladium_seguinum_51,
CASE
WHEN calcarea_carbonica_52 = 0 THEN 'Ne'
WHEN calcarea_carbonica_52 = 1 THEN 'Calcarea carbonica'
END AS calcarea_carbonica_52,
CASE
WHEN calcarea_fluorica_53 = 0 THEN 'Ne'
WHEN calcarea_fluorica_53 = 1 THEN 'Calcarea fluorica'
END AS calcarea_fluorica_53,
CASE
WHEN calcarea_phosphorica_54 = 0 THEN 'Ne'
WHEN calcarea_phosphorica_54 = 1 THEN 'Calcarea phosphorica'
END AS calcarea_phosphorica_54,
CASE
WHEN calcarea_sulfurica_55 = 0 THEN 'Ne'
WHEN calcarea_sulfurica_55 = 1 THEN 'Calcarea sulfurica'
END AS calcarea_sulfurica_55,
CASE
WHEN calendula_officinalis_56 = 0 THEN 'Ne'
WHEN calendula_officinalis_56 = 1 THEN 'Calendula officinalis'
END AS calendula_officinalis_56,
CASE
WHEN cantharis_57 = 0 THEN 'Ne'
WHEN cantharis_57 = 1 THEN 'Cantharis'
END AS cantharis_57,
CASE
WHEN capsicum_annuum_58 = 0 THEN 'Ne'
WHEN capsicum_annuum_58 = 1 THEN 'Capsicum annuum'
END AS capsicum_annuum_58,
CASE
WHEN carbo_animalis_59 = 0 THEN 'Ne'
WHEN carbo_animalis_59 = 1 THEN 'Carbo animalis'
END AS carbo_animalis_59,
CASE
WHEN carbo_vegetabilis_60 = 0 THEN 'Ne'
WHEN carbo_vegetabilis_60 = 1 THEN 'Carbo vegetabilis'
END AS carbo_vegetabilis_60,
CASE
WHEN carduus_marianus_61 = 0 THEN 'Ne'
WHEN carduus_marianus_61 = 1 THEN 'Carduus marianus'
END AS carduus_marianus_61,
CASE
WHEN caulophyllum_thalictroides_62 = 0 THEN 'Ne'
WHEN caulophyllum_thalictroides_62 = 1 THEN 'Caulophyllum thalictroides'
END AS caulophyllum_thalictroides_62,
CASE
WHEN causticum_63 = 0 THEN 'Ne'
WHEN causticum_63 = 1 THEN 'Causticum'
END AS causticum_63,
CASE
WHEN cicuta_virosa_64 = 0 THEN 'Ne'
WHEN cicuta_virosa_64 = 1 THEN 'Cicuta virosa'
END AS cicuta_virosa_64,
CASE
WHEN cina_65 = 0 THEN 'Ne'
WHEN cina_65 = 1 THEN 'Cina'
END AS cina_65,
CASE
WHEN cinnabaris_66 = 0 THEN 'Ne'
WHEN cinnabaris_66 = 1 THEN 'Cinnabaris'
END AS cinnabaris_66,
CASE
WHEN clematis_erecta_67 = 0 THEN 'Ne'
WHEN clematis_erecta_67 = 1 THEN 'Clematis erecta'
END AS clematis_erecta_67,
CASE
WHEN cocculus_indicus_68 = 0 THEN 'Ne'
WHEN cocculus_indicus_68 = 1 THEN 'Cocculus indicus'
END AS cocculus_indicus_68,
CASE
WHEN coccus_cacti_69 = 0 THEN 'Ne'
WHEN coccus_cacti_69 = 1 THEN 'Coccus cacti'
END AS coccus_cacti_69,
CASE
WHEN coffea_cruda_70 = 0 THEN 'Ne'
WHEN coffea_cruda_70 = 1 THEN 'Coffea cruda'
END AS coffea_cruda_70,
CASE
WHEN colchicum_autumnale_71 = 0 THEN 'Ne'
WHEN colchicum_autumnale_71 = 1 THEN 'Colchicum autumnale'
END AS colchicum_autumnale_71,
CASE
WHEN colocynthis_72 = 0 THEN 'Ne'
WHEN colocynthis_72 = 1 THEN 'Colocynthis'
END AS colocynthis_72,
CASE
WHEN condurango_73 = 0 THEN 'Ne'
WHEN condurango_73 = 1 THEN 'Condurango'
END AS condurango_73,
CASE
WHEN conium_maculatum_74 = 0 THEN 'Ne'
WHEN conium_maculatum_74 = 1 THEN 'Conium maculatum'
END AS conium_maculatum_74,
CASE
WHEN corallium_rubrum_75 = 0 THEN 'Ne'
WHEN corallium_rubrum_75 = 1 THEN 'Corallium rubrum'
END AS corallium_rubrum_75,
CASE
WHEN crataegus_oxyacantha_76 = 0 THEN 'Ne'
WHEN crataegus_oxyacantha_76 = 1 THEN 'Crataegus oxyacantha'
END AS crataegus_oxyacantha_76,
CASE
WHEN crocus_sativus_77 = 0 THEN 'Ne'
WHEN crocus_sativus_77 = 1 THEN 'Crocus sativus'
END AS crocus_sativus_77,
CASE
WHEN croton_tiglium_78 = 0 THEN 'Ne'
WHEN croton_tiglium_78 = 1 THEN 'Croton tiglium'
END AS croton_tiglium_78,
CASE
WHEN cuprum_arsenicosum_79 = 0 THEN 'Ne'
WHEN cuprum_arsenicosum_79 = 1 THEN 'Cuprum arsenicosum'
END AS cuprum_arsenicosum_79,
CASE
WHEN cuprum_metallicum_80 = 0 THEN 'Ne'
WHEN cuprum_metallicum_80 = 1 THEN 'Cuprum metallicum'
END AS cuprum_metallicum_80,
CASE
WHEN cyclamen_europaeum_81 = 0 THEN 'Ne'
WHEN cyclamen_europaeum_81 = 1 THEN 'Cyclamen europaeum'
END AS cyclamen_europaeum_81,
CASE
WHEN cypripedium_pubescens_82 = 0 THEN 'Ne'
WHEN cypripedium_pubescens_82 = 1 THEN 'Cypripedium pubescens'
END AS cypripedium_pubescens_82,
CASE
WHEN digitalis_purpurea_83 = 0 THEN 'Ne'
WHEN digitalis_purpurea_83 = 1 THEN 'Digitalis purpurea'
END AS digitalis_purpurea_83,
CASE
WHEN dolichos_pruriens_84 = 0 THEN 'Ne'
WHEN dolichos_pruriens_84 = 1 THEN 'Dolichos pruriens'
END AS dolichos_pruriens_84,
CASE
WHEN drosera_85 = 0 THEN 'Ne'
WHEN drosera_85 = 1 THEN 'Drosera'
END AS drosera_85,
CASE
WHEN dulcamara_86 = 0 THEN 'Ne'
WHEN dulcamara_86 = 1 THEN 'Dulcamara'
END AS dulcamara_86,
CASE
WHEN echinacea_angustifolia_87 = 0 THEN 'Ne'
WHEN echinacea_angustifolia_87 = 1 THEN 'Echinacea angustifolia'
END AS echinacea_angustifolia_87,
CASE
WHEN equisetum_hiemale_88 = 0 THEN 'Ne'
WHEN equisetum_hiemale_88 = 1 THEN 'Equisetum hiemale'
END AS equisetum_hiemale_88,
CASE
WHEN eugenia_jambosa_89 = 0 THEN 'Ne'
WHEN eugenia_jambosa_89 = 1 THEN 'Eugenia jambosa'
END AS eugenia_jambosa_89,
CASE
WHEN eupatorium_perfoliatum_90 = 0 THEN 'Ne'
WHEN eupatorium_perfoliatum_90 = 1 THEN 'Eupatorium perfoliatum'
END AS eupatorium_perfoliatum_90,
CASE
WHEN euphrasia_officinalis_91 = 0 THEN 'Ne'
WHEN euphrasia_officinalis_91 = 1 THEN 'Euphrasia officinalis'
END AS euphrasia_officinalis_91,
CASE
WHEN ferrum_metallicum_92 = 0 THEN 'Ne'
WHEN ferrum_metallicum_92 = 1 THEN 'Ferrum metallicum'
END AS ferrum_metallicum_92,
CASE
WHEN ferrum_phosphoricum_93 = 0 THEN 'Ne'
WHEN ferrum_phosphoricum_93 = 1 THEN 'Ferrum phosphoricum'
END AS ferrum_phosphoricum_93,
CASE
WHEN fluoricum_acidum_94 = 0 THEN 'Ne'
WHEN fluoricum_acidum_94 = 1 THEN 'Fluoricum acidum'
END AS fluoricum_acidum_94,
CASE
WHEN folliculinum_95 = 0 THEN 'Ne'
WHEN folliculinum_95 = 1 THEN 'Folliculinum'
END AS folliculinum_95,
CASE
WHEN formica_rufa_96 = 0 THEN 'Ne'
WHEN formica_rufa_96 = 1 THEN 'Formica rufa'
END AS formica_rufa_96,
CASE
WHEN fucus_vesiculosus_97 = 0 THEN 'Ne'
WHEN fucus_vesiculosus_97 = 1 THEN 'Fucus vesiculosus'
END AS fucus_vesiculosus_97,
CASE
WHEN gelsemium_sempervirens_98 = 0 THEN 'Ne'
WHEN gelsemium_sempervirens_98 = 1 THEN 'Gelsemium sempervirens'
END AS gelsemium_sempervirens_98,
CASE
WHEN ginkgo_biloba_99 = 0 THEN 'Ne'
WHEN ginkgo_biloba_99 = 1 THEN 'Ginkgo biloba'
END AS ginkgo_biloba_99,
CASE
WHEN glonoinum_100 = 0 THEN 'Ne'
WHEN glonoinum_100 = 1 THEN 'Glonoinum'
END AS glonoinum_100,
CASE
WHEN graphites_101 = 0 THEN 'Ne'
WHEN graphites_101 = 1 THEN 'Graphites'
END AS graphites_101,
CASE
WHEN guaiacum_102 = 0 THEN 'Ne'
WHEN guaiacum_102 = 1 THEN 'Guaiacum'
END AS guaiacum_102,
CASE
WHEN hamamelis_virginiana_103 = 0 THEN 'Ne'
WHEN hamamelis_virginiana_103 = 1 THEN 'Hamamelis virginiana'
END AS hamamelis_virginiana_103,
CASE
WHEN harpagophytum_procumbens_104 = 0 THEN 'Ne'
WHEN harpagophytum_procumbens_104 = 1 THEN 'Harpagophytum procumbens'
END AS harpagophytum_procumbens_104,
CASE
WHEN hekla_lava_105 = 0 THEN 'Ne'
WHEN hekla_lava_105 = 1 THEN 'Hekla lava'
END AS hekla_lava_105,
CASE
WHEN helonias_dioica_106 = 0 THEN 'Ne'
WHEN helonias_dioica_106 = 1 THEN 'Helonias dioica'
END AS helonias_dioica_106,
CASE
WHEN hepar_sulfuris_calcareum_107 = 0 THEN 'Ne'
WHEN hepar_sulfuris_calcareum_107 = 1 THEN 'Hepar sulfuris calcareum'
END AS hepar_sulfuris_calcareum_107,
CASE
WHEN histaminum_108 = 0 THEN 'Ne'
WHEN histaminum_108 = 1 THEN 'Histaminum'
END AS histaminum_108,
CASE
WHEN hydrastis_canadensis_109 = 0 THEN 'Ne'
WHEN hydrastis_canadensis_109 = 1 THEN 'Hydrastis canadensis'
END AS hydrastis_canadensis_109,
CASE
WHEN hydrocotyle_asiatica_110 = 0 THEN 'Ne'
WHEN hydrocotyle_asiatica_110 = 1 THEN 'Hydrocotyle asiatica'
END AS hydrocotyle_asiatica_110,
CASE
WHEN hyoscyamus_niger_111 = 0 THEN 'Ne'
WHEN hyoscyamus_niger_111 = 1 THEN 'Hyoscyamus niger'
END AS hyoscyamus_niger_111,
CASE
WHEN hypericum_perforatum_112 = 0 THEN 'Ne'
WHEN hypericum_perforatum_112 = 1 THEN 'Hypericum perforatum'
END AS hypericum_perforatum_112,
CASE
WHEN chamomilla_vulgaris_113 = 0 THEN 'Ne'
WHEN chamomilla_vulgaris_113 = 1 THEN 'Chamomilla vulgaris'
END AS chamomilla_vulgaris_113,
CASE
WHEN chelidonium_majus_114 = 0 THEN 'Ne'
WHEN chelidonium_majus_114 = 1 THEN 'Chelidonium majus'
END AS chelidonium_majus_114,
CASE
WHEN china_115 = 0 THEN 'Ne'
WHEN china_115 = 1 THEN 'China'
END AS china_115,
CASE
WHEN chininum_sulfuricum_116 = 0 THEN 'Ne'
WHEN chininum_sulfuricum_116 = 1 THEN 'Chininum sulfuricum'
END AS chininum_sulfuricum_116,
CASE
WHEN ignatia_amara_117 = 0 THEN 'Ne'
WHEN ignatia_amara_117 = 1 THEN 'Ignatia amara'
END AS ignatia_amara_117,
CASE
WHEN influenzinum_118 = 0 THEN 'Ne'
WHEN influenzinum_118 = 1 THEN 'Influenzinum'
END AS influenzinum_118,
CASE
WHEN iodum_119 = 0 THEN 'Ne'
WHEN iodum_119 = 1 THEN 'Iodum'
END AS iodum_119,
CASE
WHEN ipecacuanha_120 = 0 THEN 'Ne'
WHEN ipecacuanha_120 = 1 THEN 'Ipecacuanha'
END AS ipecacuanha_120,
CASE
WHEN iris_versicolor_121 = 0 THEN 'Ne'
WHEN iris_versicolor_121 = 1 THEN 'Iris versicolor'
END AS iris_versicolor_121,
CASE
WHEN jalapa_122 = 0 THEN 'Ne'
WHEN jalapa_122 = 1 THEN 'Jalapa'
END AS jalapa_122,
CASE
WHEN kalium_arsenicosum_123 = 0 THEN 'Ne'
WHEN kalium_arsenicosum_123 = 1 THEN 'Kalium arsenicosum'
END AS kalium_arsenicosum_123,
CASE
WHEN kalium_bichromicum_124 = 0 THEN 'Ne'
WHEN kalium_bichromicum_124 = 1 THEN 'Kalium bichromicum'
END AS kalium_bichromicum_124,
CASE
WHEN kalium_bromatum_125 = 0 THEN 'Ne'
WHEN kalium_bromatum_125 = 1 THEN 'Kalium bromatum'
END AS kalium_bromatum_125,
CASE
WHEN kalium_carbonicum_126 = 0 THEN 'Ne'
WHEN kalium_carbonicum_126 = 1 THEN 'Kalium carbonicum'
END AS kalium_carbonicum_126,
CASE
WHEN kalium_iodatum_127 = 0 THEN 'Ne'
WHEN kalium_iodatum_127 = 1 THEN 'Kalium iodatum'
END AS kalium_iodatum_127,
CASE
WHEN kalium_muriaticum_128 = 0 THEN 'Ne'
WHEN kalium_muriaticum_128 = 1 THEN 'Kalium muriaticum'
END AS kalium_muriaticum_128,
CASE
WHEN kalium_phosphoricum_129 = 0 THEN 'Ne'
WHEN kalium_phosphoricum_129 = 1 THEN 'Kalium phosphoricum'
END AS kalium_phosphoricum_129,
CASE
WHEN kalium_sulfuricum_130 = 0 THEN 'Ne'
WHEN kalium_sulfuricum_130 = 1 THEN 'Kalium sulfuricum'
END AS kalium_sulfuricum_130,
CASE
WHEN kalmia_latifolia_131 = 0 THEN 'Ne'
WHEN kalmia_latifolia_131 = 1 THEN 'Kalmia latifolia'
END AS kalmia_latifolia_131,
CASE
WHEN kreosotum_132 = 0 THEN 'Ne'
WHEN kreosotum_132 = 1 THEN 'Kreosotum'
END AS kreosotum_132,
CASE
WHEN lac_caninum_133 = 0 THEN 'Ne'
WHEN lac_caninum_133 = 1 THEN 'Lac caninum'
END AS lac_caninum_133,
CASE
WHEN lachesis_mutus_134 = 0 THEN 'Ne'
WHEN lachesis_mutus_134 = 1 THEN 'Lachesis mutus'
END AS lachesis_mutus_134,
CASE
WHEN lachnanthes_tinctoria_135 = 0 THEN 'Ne'
WHEN lachnanthes_tinctoria_135 = 1 THEN 'Lachnanthes tinctoria'
END AS lachnanthes_tinctoria_135,
CASE
WHEN ledum_palustre_136 = 0 THEN 'Ne'
WHEN ledum_palustre_136 = 1 THEN 'Ledum palustre'
END AS ledum_palustre_136,
CASE
WHEN lilium_tigrinum_137 = 0 THEN 'Ne'
WHEN lilium_tigrinum_137 = 1 THEN 'Lilium tigrinum'
END AS lilium_tigrinum_137,
CASE
WHEN lithium_carbonicum_138 = 0 THEN 'Ne'
WHEN lithium_carbonicum_138 = 1 THEN 'Lithium carbonicum'
END AS lithium_carbonicum_138,
CASE
WHEN lobelia_inflata_139 = 0 THEN 'Ne'
WHEN lobelia_inflata_139 = 1 THEN 'Lobelia inflata'
END AS lobelia_inflata_139,
CASE
WHEN luteinum_140 = 0 THEN 'Ne'
WHEN luteinum_140 = 1 THEN 'Luteinum'
END AS luteinum_140,
CASE
WHEN lycopodium_clavatum_141 = 0 THEN 'Ne'
WHEN lycopodium_clavatum_141 = 1 THEN 'Lycopodium clavatum'
END AS lycopodium_clavatum_141,
CASE
WHEN magnesia_carbonica_142 = 0 THEN 'Ne'
WHEN magnesia_carbonica_142 = 1 THEN 'Magnesia carbonica'
END AS magnesia_carbonica_142,
CASE
WHEN magnesia_muriatica_143 = 0 THEN 'Ne'
WHEN magnesia_muriatica_143 = 1 THEN 'Magnesia muriatica'
END AS magnesia_muriatica_143,
CASE
WHEN magnesia_phosphorica_144 = 0 THEN 'Ne'
WHEN magnesia_phosphorica_144 = 1 THEN 'Magnesia phosphorica'
END AS magnesia_phosphorica_144,
CASE
WHEN manganum_aceticum_145 = 0 THEN 'Ne'
WHEN manganum_aceticum_145 = 1 THEN 'Manganum aceticum'
END AS manganum_aceticum_145,
CASE
WHEN manganum_metallicum_146 = 0 THEN 'Ne'
WHEN manganum_metallicum_146 = 1 THEN 'Manganum metallicum'
END AS manganum_metallicum_146,
CASE
WHEN mercurius_corrosivus_147 = 0 THEN 'Ne'
WHEN mercurius_corrosivus_147 = 1 THEN 'Mercurius corrosivus'
END AS mercurius_corrosivus_147,
CASE
WHEN mercurius_cyanatus_148 = 0 THEN 'Ne'
WHEN mercurius_cyanatus_148 = 1 THEN 'Mercurius cyanatus'
END AS mercurius_cyanatus_148,
CASE
WHEN mercurius_dulcis_149 = 0 THEN 'Ne'
WHEN mercurius_dulcis_149 = 1 THEN 'Mercurius dulcis'
END AS mercurius_dulcis_149,
CASE
WHEN mercurius_solubilis_150 = 0 THEN 'Ne'
WHEN mercurius_solubilis_150 = 1 THEN 'Mercurius solubilis'
END AS mercurius_solubilis_150,
CASE
WHEN mezereum_151 = 0 THEN 'Ne'
WHEN mezereum_151 = 1 THEN 'Mezereum'
END AS mezereum_151,
CASE
WHEN millefolium_152 = 0 THEN 'Ne'
WHEN millefolium_152 = 1 THEN 'Millefolium'
END AS millefolium_152,
CASE
WHEN moschus_153 = 0 THEN 'Ne'
WHEN moschus_153 = 1 THEN 'Moschus'
END AS moschus_153,
CASE
WHEN muriaticum_acidum_154 = 0 THEN 'Ne'
WHEN muriaticum_acidum_154 = 1 THEN 'Muriaticum acidum'
END AS muriaticum_acidum_154,
CASE
WHEN naja_tripudians_155 = 0 THEN 'Ne'
WHEN naja_tripudians_155 = 1 THEN 'Naja tripudians'
END AS naja_tripudians_155,
CASE
WHEN natrum_carbonicum_156 = 0 THEN 'Ne'
WHEN natrum_carbonicum_156 = 1 THEN 'Natrum carbonicum'
END AS natrum_carbonicum_156,
CASE
WHEN natrum_muriaticum_157 = 0 THEN 'Ne'
WHEN natrum_muriaticum_157 = 1 THEN 'Natrum muriaticum'
END AS natrum_muriaticum_157,
CASE
WHEN natrum_phosphoricum_158 = 0 THEN 'Ne'
WHEN natrum_phosphoricum_158 = 1 THEN 'Natrum phosphoricum'
END AS natrum_phosphoricum_158,
CASE
WHEN natrum_sulfuricum_159 = 0 THEN 'Ne'
WHEN natrum_sulfuricum_159 = 1 THEN 'Natrum sulfuricum'
END AS natrum_sulfuricum_159,
CASE
WHEN nitricum_acidum_160 = 0 THEN 'Ne'
WHEN nitricum_acidum_160 = 1 THEN 'Nitricum acidum'
END AS nitricum_acidum_160,
CASE
WHEN nux_moschata_161 = 0 THEN 'Ne'
WHEN nux_moschata_161 = 1 THEN 'Nux moschata'
END AS nux_moschata_161,
CASE
WHEN nux_vomica_162 = 0 THEN 'Ne'
WHEN nux_vomica_162 = 1 THEN 'Nux vomica'
END AS nux_vomica_162,
CASE
WHEN oleander_163 = 0 THEN 'Ne'
WHEN oleander_163 = 1 THEN 'Oleander'
END AS oleander_163,
CASE
WHEN opium_164 = 0 THEN 'Ne'
WHEN opium_164 = 1 THEN 'Opium'
END AS opium_164,
CASE
WHEN oxalicum_acidum_165 = 0 THEN 'Ne'
WHEN oxalicum_acidum_165 = 1 THEN 'Oxalicum acidum'
END AS oxalicum_acidum_165,
CASE
WHEN petroleum_166 = 0 THEN 'Ne'
WHEN petroleum_166 = 1 THEN 'Petroleum'
END AS petroleum_166,
CASE
WHEN phosphoricum_acidum_167 = 0 THEN 'Ne'
WHEN phosphoricum_acidum_167 = 1 THEN 'Phosphoricum acidum'
END AS phosphoricum_acidum_167,
CASE
WHEN phosphorus_168 = 0 THEN 'Ne'
WHEN phosphorus_168 = 1 THEN 'Phosphorus'
END AS phosphorus_168,
CASE
WHEN phytolacca_decandra_169 = 0 THEN 'Ne'
WHEN phytolacca_decandra_169 = 1 THEN 'Phytolacca decandra'
END AS phytolacca_decandra_169,
CASE
WHEN pix_liquida_170 = 0 THEN 'Ne'
WHEN pix_liquida_170 = 1 THEN 'Pix liquida'
END AS pix_liquida_170,
CASE
WHEN plantago_major_171 = 0 THEN 'Ne'
WHEN plantago_major_171 = 1 THEN 'Plantago major'
END AS plantago_major_171,
CASE
WHEN platina_172 = 0 THEN 'Ne'
WHEN platina_172 = 1 THEN 'Platina'
END AS platina_172,
CASE
WHEN plumbum_metallicum_173 = 0 THEN 'Ne'
WHEN plumbum_metallicum_173 = 1 THEN 'Plumbum metallicum'
END AS plumbum_metallicum_173,
CASE
WHEN podophyllum_peltatum_174 = 0 THEN 'Ne'
WHEN podophyllum_peltatum_174 = 1 THEN 'Podophyllum peltatum'
END AS podophyllum_peltatum_174,
CASE
WHEN pollen_de_graminees_175 = 0 THEN 'Ne'
WHEN pollen_de_graminees_175 = 1 THEN 'Pollen de graminees'
END AS pollen_de_graminees_175,
CASE
WHEN pollens_176 = 0 THEN 'Ne'
WHEN pollens_176 = 1 THEN 'Pollens'
END AS pollens_176,
CASE
WHEN poumon_histamine_177 = 0 THEN 'Ne'
WHEN poumon_histamine_177 = 1 THEN 'Poumon histamine'
END AS poumon_histamine_177,
CASE
WHEN pulsatilla_178 = 0 THEN 'Ne'
WHEN pulsatilla_178 = 1 THEN 'Pulsatilla'
END AS pulsatilla_178,
CASE
WHEN pyrogenium_179 = 0 THEN 'Ne'
WHEN pyrogenium_179 = 1 THEN 'Pyrogenium'
END AS pyrogenium_179,
CASE
WHEN rhododendron_chrysanthum_180 = 0 THEN 'Ne'
WHEN rhododendron_chrysanthum_180 = 1 THEN 'Rhododendron chrysanthum'
END AS rhododendron_chrysanthum_180,
CASE
WHEN rhus_toxicodendron_181 = 0 THEN 'Ne'
WHEN rhus_toxicodendron_181 = 1 THEN 'Rhus toxicodendron'
END AS rhus_toxicodendron_181,

CASE
WHEN ricinus_communis_182 = 0 THEN 'Ne'
WHEN ricinus_communis_182 = 1 THEN 'Ricinus communis'
END AS ricinus_communis_182,

CASE
WHEN robinia_pseudo_acacia_183 = 0 THEN 'Ne'
WHEN robinia_pseudo_acacia_183 = 1 THEN 'Robinia pseudo-acacia'
END AS robinia_pseudo_acacia_183,
CASE
WHEN rumex_crispus_184 = 0 THEN 'Ne'
WHEN rumex_crispus_184 = 1 THEN 'Rumex crispus'
END AS rumex_crispus_184,
CASE
WHEN ruta_graveolens_185 = 0 THEN 'Ne'
WHEN ruta_graveolens_185 = 1 THEN 'Ruta graveolens'
END AS ruta_graveolens_185,
CASE
WHEN sabadilla_186 = 0 THEN 'Ne'
WHEN sabadilla_186 = 1 THEN 'Sabadilla'
END AS sabadilla_186,
CASE
WHEN sabal_serrulata_187 = 0 THEN 'Ne'
WHEN sabal_serrulata_187 = 1 THEN 'Sabal serrulata'
END AS sabal_serrulata_187,
CASE
WHEN sabina_188 = 0 THEN 'Ne'
WHEN sabina_188 = 1 THEN 'Sabina'
END AS sabina_188,
CASE
WHEN sambucus_nigra_189 = 0 THEN 'Ne'
WHEN sambucus_nigra_189 = 1 THEN 'Sambucus nigra'
END AS sambucus_nigra_189,
CASE
WHEN sanguinaria_canadensis_190 = 0 THEN 'Ne'
WHEN sanguinaria_canadensis_190 = 1 THEN 'Sanguinaria canadensis'
END AS sanguinaria_canadensis_190,
CASE
WHEN sarsaparilla_191 = 0 THEN 'Ne'
WHEN sarsaparilla_191 = 1 THEN 'Sarsaparilla'
END AS sarsaparilla_191,
CASE
WHEN secale_cornutum_192 = 0 THEN 'Ne'
WHEN secale_cornutum_192 = 1 THEN 'Secale cornutum'
END AS secale_cornutum_192,
CASE
WHEN selenium_metallicum_193 = 0 THEN 'Ne'
WHEN selenium_metallicum_193 = 1 THEN 'Selenium metallicum'
END AS selenium_metallicum_193,
CASE
WHEN senna_194 = 0 THEN 'Ne'
WHEN senna_194 = 1 THEN 'Senna'
END AS senna_194,
CASE
WHEN sepia_officinalis_195 = 0 THEN 'Ne'
WHEN sepia_officinalis_195 = 1 THEN 'Sepia officinalis'
END AS sepia_officinalis_195,
CASE
WHEN silicea_196 = 0 THEN 'Ne'
WHEN silicea_196 = 1 THEN 'Silicea'
END AS silicea_196,
CASE
WHEN solidago_virga_aurea_197 = 0 THEN 'Ne'
WHEN solidago_virga_aurea_197 = 1 THEN 'Solidago virga aurea'
END AS solidago_virga_aurea_197,
CASE
WHEN spigelia_anthelmia_198 = 0 THEN 'Ne'
WHEN spigelia_anthelmia_198 = 1 THEN 'Spigelia anthelmia'
END AS spigelia_anthelmia_198,
CASE
WHEN spongia_tosta_199 = 0 THEN 'Ne'
WHEN spongia_tosta_199 = 1 THEN 'Spongia tosta'
END AS spongia_tosta_199,
CASE
WHEN staphysagria_200 = 0 THEN 'Ne'
WHEN staphysagria_200 = 1 THEN 'Staphysagria'
END AS staphysagria_200,
CASE
WHEN sticta_pulmonaria_201 = 0 THEN 'Ne'
WHEN sticta_pulmonaria_201 = 1 THEN 'Sticta pulmonaria'
END AS sticta_pulmonaria_201,
CASE
WHEN stramonium_202 = 0 THEN 'Ne'
WHEN stramonium_202 = 1 THEN 'Stramonium'
END AS stramonium_202,
CASE
WHEN sulfur_203 = 0 THEN 'Ne'
WHEN sulfur_203 = 1 THEN 'Sulfur'
END AS sulfur_203,
CASE
WHEN sulfur_iodatum_204 = 0 THEN 'Ne'
WHEN sulfur_iodatum_204 = 1 THEN 'Sulfur iodatum'
END AS sulfur_iodatum_204,
CASE
WHEN sulfuricum_acidum_205 = 0 THEN 'Ne'
WHEN sulfuricum_acidum_205 = 1 THEN 'Sulfuricum acidum'
END AS sulfuricum_acidum_205,
CASE
WHEN symphytum_officinale_206 = 0 THEN 'Ne'
WHEN symphytum_officinale_206 = 1 THEN 'Symphytum officinale'
END AS symphytum_officinale_206,
CASE
WHEN tabacum_207 = 0 THEN 'Ne'
WHEN tabacum_207 = 1 THEN 'Tabacum'
END AS tabacum_207,
CASE
WHEN taraxacum_dens_leonis_208 = 0 THEN 'Ne'
WHEN taraxacum_dens_leonis_208 = 1 THEN 'Taraxacum dens leonis'
END AS taraxacum_dens_leonis_208,
CASE
WHEN tarentula_hispana_209 = 0 THEN 'Ne'
WHEN tarentula_hispana_209 = 1 THEN 'Tarentula hispana'
END AS tarentula_hispana_209,
CASE
WHEN teucrium_marum_210 = 0 THEN 'Ne'
WHEN teucrium_marum_210 = 1 THEN 'Teucrium marum'
END AS teucrium_marum_210,
CASE
WHEN thallium_aceticum_211 = 0 THEN 'Ne'
WHEN thallium_aceticum_211 = 1 THEN 'Thallium aceticum'
END AS thallium_aceticum_211,
CASE
WHEN thuya_occidentalis_212 = 0 THEN 'Ne'
WHEN thuya_occidentalis_212 = 1 THEN 'Thuya occidentalis'
END AS thuya_occidentalis_212,
CASE
WHEN urtica_urens_213 = 0 THEN 'Ne'
WHEN urtica_urens_213 = 1 THEN 'Urtica urens'
END AS urtica_urens_213,
CASE
WHEN valeriana_officinalis_214 = 0 THEN 'Ne'
WHEN valeriana_officinalis_214 = 1 THEN 'Valeriana officinalis'
END AS valeriana_officinalis_214,
CASE
WHEN veratrum_album_215 = 0 THEN 'Ne'
WHEN veratrum_album_215 = 1 THEN 'Veratrum album'
END AS veratrum_album_215,
CASE
WHEN viola_tricolor_216 = 0 THEN 'Ne'
WHEN viola_tricolor_216 = 1 THEN 'Viola tricolor'
END AS viola_tricolor_216,
CASE
WHEN vipera_redi_217 = 0 THEN 'Ne'
WHEN vipera_redi_217 = 1 THEN 'Vipera redi'
END AS vipera_redi_217,
CASE
WHEN viscum_album_218 = 0 THEN 'Ne'
WHEN viscum_album_218 = 1 THEN 'Viscum album'
END AS viscum_album_218,
CASE
WHEN zincum_metallicum_219 = 0 THEN 'Ne'
WHEN zincum_metallicum_219 = 1 THEN 'Zincum metallicum'
END AS zincum_metallicum_219,
CASE
WHEN camilia_220 = 0 THEN 'Ne'
WHEN camilia_220 = 1 THEN 'CAMILIA'
END AS camilia_220,
CASE
WHEN cocculine_221 = 0 THEN 'Ne'
WHEN cocculine_221 = 1 THEN 'COCCULINE'
END AS cocculine_221,
CASE
WHEN coryzalia_222 = 0 THEN 'Ne'
WHEN coryzalia_222 = 1 THEN 'CORYZALIA'
END AS coryzalia_222,
CASE
WHEN drosetux_223 = 0 THEN 'Ne'
WHEN drosetux_223 = 1 THEN 'DROSETUX'
END AS drosetux_223,
CASE
WHEN neo_224 = 0 THEN 'Ne'
WHEN neo_224 = 1 THEN 'NEO'
END AS neo_224,
CASE
WHEN gastrocynesine_225 = 0 THEN 'Ne'
WHEN gastrocynesine_225 = 1 THEN 'GASTROCYNÉSINE'
END AS gastrocynesine_225,
CASE
WHEN homeogene_9_226 = 0 THEN 'Ne'
WHEN homeogene_9_226 = 1 THEN 'HOMÉOGENE 9'
END AS homeogene_9_226,
CASE
WHEN homeovox_227 = 0 THEN 'Ne'
WHEN homeovox_227 = 1 THEN 'HOMEOVOX'
END AS homeovox_227,
CASE
WHEN oscillococcinum_228 = 0 THEN 'Ne'
WHEN oscillococcinum_228 = 1 THEN 'OSCILLOCOCCINUM'
END AS oscillococcinum_228,
CASE
WHEN paragrippe_229 = 0 THEN 'Ne'
WHEN paragrippe_229 = 1 THEN 'PARAGRIPPE'
END AS paragrippe_229,
CASE
WHEN rhinallergy_230 = 0 THEN 'Ne'
WHEN rhinallergy_230 = 1 THEN 'RHINALLERGY'
END AS rhinallergy_230,
CASE
WHEN sedalia_231 = 0 THEN 'Ne'
WHEN sedalia_231 = 1 THEN 'SEDALIA'
END AS sedalia_231,
CASE
WHEN sedatif_pc_232 = 0 THEN 'Ne'
WHEN sedatif_pc_232 = 1 THEN 'SÉDATIF PC'
END AS sedatif_pc_232

FROM zdravi_homeopatika
WHERE uzivatel_id = $uzivatel_id ORDER BY datum ASC LIMIT 1";
$result = $conn->query($sql);




while($row = $result->fetch_assoc()) {
//echo"Radek abrotanum_2: ".$row["abrotanum_2"].'<br>';
//echo"Radek aconitum_napellus_3: ".$row["aconitum_napellus_3"].'<br>';
if($row["abrotanum_2"] == 'Ne'
  && $row["aconitum_napellus_3"] == 'Ne'
  && $row["actaea_racemosa_4"] == 'Ne'
  && $row["actaea_spicata_5"] == 'Ne'
  && $row["aesculus_hippocastanum_6"] == 'Ne'
  && $row["aethusa_cynapium_7"] == 'Ne'
  && $row["agaricus_muscarius_8"] == 'Ne'
  && $row["agnus_castus_9"] == 'Ne'
  && $row["agraphis_nutans_10"] == 'Ne'
  && $row["ailanthus_glandulosa_11"] == 'Ne'
  && $row["allium_cepa_12"] == 'Ne'
  && $row["allium_sativum_13"] == 'Ne'
  && $row["aloe_socotrina_14"] == 'Ne'
  && $row["alumina_15"] == 'Ne'
  && $row["ambra_grisea_16"] == 'Ne'
  && $row["ammonium_carbonicum_17"] == 'Ne'
  && $row["ammonium_muriaticum_18"] == 'Ne'
  && $row["amylium_nitrosum_19"] == 'Ne'
  && $row["anacardium_orientale_20"] == 'Ne'
  && $row["anagallis_arvensis_21"] == 'Ne'
  && $row["antimonium_crudum_22"] == 'Ne'
  && $row["antimonium_tartaricum_23"] == 'Ne'
  && $row["apis_mellifica_24"] == 'Ne'
  && $row["aralia_racemosa_25"] == 'Ne'
  && $row["aranea_diadema_26"] == 'Ne'
  && $row["argentum_nitricum_27"] == 'Ne'
  && $row["arnica_montana_28"] == 'Ne'
  && $row["arsenicum_album_29"] == 'Ne'
  && $row["arsenicum_iodatum_30"] == 'Ne'
  && $row["arum_triphyllum_31"] == 'Ne'
  && $row["asa_foetida_32"] == 'Ne'
  && $row["aurum_metallicum_33"] == 'Ne'
  && $row["aurum_muriaticum_natronatum_34"] == 'Ne'
  && $row["avena_sativa_35"] == 'Ne'
  && $row["baryta_carbonica_36"] == 'Ne'
  && $row["baryta_iodata_37"] == 'Ne'
  && $row["baryta_muriatica_38"] == 'Ne'
  && $row["belladonna_39"] == 'Ne'
  && $row["bellis_perennis_40"] == 'Ne'
  && $row["benzoicum_acidum_41"] == 'Ne'
  && $row["berberis_vulgaris_42"] == 'Ne'
  && $row["bismuthum_43"] == 'Ne'
  && $row["blatta_orientalis_44"] == 'Ne'
  && $row["borax_45"] == 'Ne'
  && $row["bromum_46"] == 'Ne'
  && $row["bryonia_47"] == 'Ne'
  && $row["bufo_rana_48"] == 'Ne'
  && $row["cactus_grandiflorus_49"] == 'Ne'
  && $row["cadmium_sulfuricum_50"] == 'Ne'
  && $row["caladium_seguinum_51"] == 'Ne'
  && $row["calcarea_carbonica_52"] == 'Ne'
  && $row["calcarea_fluorica_53"] == 'Ne'
  && $row["calcarea_phosphorica_54"] == 'Ne'
  && $row["calcarea_sulfurica_55"] == 'Ne'
  && $row["calendula_officinalis_56"] == 'Ne'
  && $row["cantharis_57"] == 'Ne'
  && $row["capsicum_annuum_58"] == 'Ne'
  && $row["carbo_animalis_59"] == 'Ne'
  && $row["carbo_vegetabilis_60"] == 'Ne'
  && $row["carduus_marianus_61"] == 'Ne'
  && $row["caulophyllum_thalictroides_62"] == 'Ne'
  && $row["causticum_63"] == 'Ne'
  && $row["cicuta_virosa_64"] == 'Ne'
  && $row["cina_65"] == 'Ne'
  && $row["cinnabaris_66"] == 'Ne'
  && $row["clematis_erecta_67"] == 'Ne'
  && $row["cocculus_indicus_68"] == 'Ne'
  && $row["coccus_cacti_69"] == 'Ne'
  && $row["coffea_cruda_70"] == 'Ne'
  && $row["colchicum_autumnale_71"] == 'Ne'
  && $row["colocynthis_72"] == 'Ne'
  && $row["condurango_73"] == 'Ne'
  && $row["conium_maculatum_74"] == 'Ne'
  && $row["corallium_rubrum_75"] == 'Ne'
  && $row["crataegus_oxyacantha_76"] == 'Ne'
  && $row["crocus_sativus_77"] == 'Ne'
  && $row["croton_tiglium_78"] == 'Ne'
  && $row["cuprum_arsenicosum_79"] == 'Ne'
  && $row["cuprum_metallicum_80"] == 'Ne'
  && $row["cyclamen_europaeum_81"] == 'Ne'
  && $row["cypripedium_pubescens_82"] == 'Ne'
  && $row["digitalis_purpurea_83"] == 'Ne'
  && $row["dolichos_pruriens_84"] == 'Ne'
  && $row["drosera_85"] == 'Ne'
  && $row["dulcamara_86"] == 'Ne'
  && $row["echinacea_angustifolia_87"] == 'Ne'
  && $row["equisetum_hiemale_88"] == 'Ne'
  && $row["eugenia_jambosa_89"] == 'Ne'
  && $row["eupatorium_perfoliatum_90"] == 'Ne'
  && $row["euphrasia_officinalis_91"] == 'Ne'
  && $row["ferrum_metallicum_92"] == 'Ne'
  && $row["ferrum_phosphoricum_93"] == 'Ne'
  && $row["fluoricum_acidum_94"] == 'Ne'
  && $row["folliculinum_95"] == 'Ne'
  && $row["formica_rufa_96"] == 'Ne'
  && $row["fucus_vesiculosus_97"] == 'Ne'
  && $row["gelsemium_sempervirens_98"] == 'Ne'
  && $row["ginkgo_biloba_99"] == 'Ne'
  && $row["glonoinum_100"] == 'Ne'
  && $row["graphites_101"] == 'Ne'
  && $row["guaiacum_102"] == 'Ne'
  && $row["hamamelis_virginiana_103"] == 'Ne'
  && $row["harpagophytum_procumbens_104"] == 'Ne'
  && $row["hekla_lava_105"] == 'Ne'
  && $row["helonias_dioica_106"] == 'Ne'
  && $row["hepar_sulfuris_calcareum_107"] == 'Ne'
  && $row["histaminum_108"] == 'Ne'
  && $row["hydrastis_canadensis_109"] == 'Ne'
  && $row["hydrocotyle_asiatica_110"] == 'Ne'
  && $row["hyoscyamus_niger_111"] == 'Ne'
  && $row["hypericum_perforatum_112"] == 'Ne'
  && $row["chamomilla_vulgaris_113"] == 'Ne'
  && $row["chelidonium_majus_114"] == 'Ne'
  && $row["china_115"] == 'Ne'
  && $row["chininum_sulfuricum_116"] == 'Ne'
  && $row["ignatia_amara_117"] == 'Ne'
  && $row["influenzinum_118"] == 'Ne'
  && $row["iodum_119"] == 'Ne'
  && $row["ipecacuanha_120"] == 'Ne'
  && $row["iris_versicolor_121"] == 'Ne'
  && $row["jalapa_122"] == 'Ne'
  && $row["kalium_arsenicosum_123"] == 'Ne'
  && $row["kalium_bichromicum_124"] == 'Ne'
  && $row["kalium_bromatum_125"] == 'Ne'
  && $row["kalium_carbonicum_126"] == 'Ne'
  && $row["kalium_iodatum_127"] == 'Ne'
  && $row["kalium_muriaticum_128"] == 'Ne'
  && $row["kalium_phosphoricum_129"] == 'Ne'
  && $row["kalium_sulfuricum_130"] == 'Ne'
  && $row["kalmia_latifolia_131"] == 'Ne'
  && $row["kreosotum_132"] == 'Ne'
  && $row["lac_caninum_133"] == 'Ne'
  && $row["lachesis_mutus_134"] == 'Ne'
  && $row["lachnanthes_tinctoria_135"] == 'Ne'
  && $row["ledum_palustre_136"] == 'Ne'
  && $row["lilium_tigrinum_137"] == 'Ne'
  && $row["lithium_carbonicum_138"] == 'Ne'
  && $row["lobelia_inflata_139"] == 'Ne'
  && $row["luteinum_140"] == 'Ne'
  && $row["lycopodium_clavatum_141"] == 'Ne'
  && $row["magnesia_carbonica_142"] == 'Ne'
  && $row["magnesia_muriatica_143"] == 'Ne'
  && $row["magnesia_phosphorica_144"] == 'Ne'
  && $row["manganum_aceticum_145"] == 'Ne'
  && $row["manganum_metallicum_146"] == 'Ne'
  && $row["mercurius_corrosivus_147"] == 'Ne'
  && $row["mercurius_cyanatus_148"] == 'Ne'
  && $row["mercurius_dulcis_149"] == 'Ne'
  && $row["mercurius_solubilis_150"] == 'Ne'
  && $row["mezereum_151"] == 'Ne'
  && $row["millefolium_152"] == 'Ne'
  && $row["moschus_153"] == 'Ne'
  && $row["muriaticum_acidum_154"] == 'Ne'
  && $row["naja_tripudians_155"] == 'Ne'
  && $row["natrum_carbonicum_156"] == 'Ne'
  && $row["natrum_muriaticum_157"] == 'Ne'
  && $row["natrum_phosphoricum_158"] == 'Ne'
  && $row["natrum_sulfuricum_159"] == 'Ne'
  && $row["nitricum_acidum_160"] == 'Ne'
  && $row["nux_moschata_161"] == 'Ne'
  && $row["nux_vomica_162"] == 'Ne'
  && $row["oleander_163"] == 'Ne'
  && $row["opium_164"] == 'Ne'
  && $row["oxalicum_acidum_165"] == 'Ne'
  && $row["petroleum_166"] == 'Ne'
  && $row["phosphoricum_acidum_167"] == 'Ne'
  && $row["phosphorus_168"] == 'Ne'
  && $row["phytolacca_decandra_169"] == 'Ne'
  && $row["pix_liquida_170"] == 'Ne'
  && $row["plantago_major_171"] == 'Ne'
  && $row["platina_172"] == 'Ne'
  && $row["plumbum_metallicum_173"] == 'Ne'
  && $row["podophyllum_peltatum_174"] == 'Ne'
  && $row["pollen_de_graminees_175"] == 'Ne'
  && $row["pollens_176"] == 'Ne'
  && $row["poumon_histamine_177"] == 'Ne'
  && $row["pulsatilla_178"] == 'Ne'
  && $row["pyrogenium_179"] == 'Ne'
  && $row["rhododendron_chrysanthum_180"] == 'Ne'
  && $row["rhus_toxicodendron_181"] == 'Ne'
  && $row["ricinus_communis_182"] == 'Ne'
  && $row["robinia_pseudo_acacia_183"] == 'Ne'
  && $row["rumex_crispus_184"] == 'Ne'
  && $row["ruta_graveolens_185"] == 'Ne'
  && $row["sabadilla_186"] == 'Ne'
  && $row["sabal_serrulata_187"] == 'Ne'
  && $row["sabina_188"] == 'Ne'
  && $row["sambucus_nigra_189"] == 'Ne'
  && $row["sanguinaria_canadensis_190"] == 'Ne'
  && $row["sarsaparilla_191"] == 'Ne'
  && $row["secale_cornutum_192"] == 'Ne'
  && $row["selenium_metallicum_193"] == 'Ne'
  && $row["senna_194"] == 'Ne'
  && $row["sepia_officinalis_195"] == 'Ne'
  && $row["silicea_196"] == 'Ne'
  && $row["solidago_virga_aurea_197"] == 'Ne'
  && $row["spigelia_anthelmia_198"] == 'Ne'
  && $row["spongia_tosta_199"] == 'Ne'
  && $row["staphysagria_200"] == 'Ne'
  && $row["sticta_pulmonaria_201"] == 'Ne'
  && $row["stramonium_202"] == 'Ne'
  && $row["sulfur_203"] == 'Ne'
  && $row["sulfur_iodatum_204"] == 'Ne'
  && $row["sulfuricum_acidum_205"] == 'Ne'
  && $row["symphytum_officinale_206"] == 'Ne'
  && $row["tabacum_207"] == 'Ne'
  && $row["taraxacum_dens_leonis_208"] == 'Ne'
  && $row["tarentula_hispana_209"] == 'Ne'
  && $row["teucrium_marum_210"] == 'Ne'
  && $row["thallium_aceticum_211"] == 'Ne'
  && $row["thuya_occidentalis_212"] == 'Ne'
  && $row["urtica_urens_213"] == 'Ne'
  && $row["valeriana_officinalis_214"] == 'Ne'
  && $row["veratrum_album_215"] == 'Ne'
  && $row["viola_tricolor_216"] == 'Ne'
  && $row["vipera_redi_217"] == 'Ne'
  && $row["viscum_album_218"] == 'Ne'
  && $row["zincum_metallicum_219"] == 'Ne'
  && $row["camilia_220"] == 'Ne'
  && $row["cocculine_221"] == 'Ne'
  && $row["coryzalia_222"] == 'Ne'
  && $row["drosetux_223"] == 'Ne'
  && $row["neo_224"] == 'Ne'
  && $row["gastrocynesine_225"] == 'Ne'
  && $row["homeogene_9_226"] == 'Ne'
  && $row["homeovox_227"] == 'Ne'
  && $row["oscillococcinum_228"] == 'Ne'
  && $row["grippe_229"] == 'Ne'
  && $row["rhinallergy_230"] == 'Ne'
  && $row["sedalia_231"] == 'Ne'
  && $row["sedatif_pc_232"] == 'Ne'    
    
    ){


        echo 'Žádný záznam';
    
    }else{

if($row["abrotanum_2"] == 'Ne'){
    echo $row["abrotanum_2"]='';
    }else{
    echo $row["abrotanum_2"].',<br> ';
    }
    if($row["aconitum_napellus_3"] == 'Ne'){
    echo $row["aconitum_napellus_3"]='';
    }else{
    echo $row["aconitum_napellus_3"].',<br> ';
    }
    if($row["actaea_racemosa_4"] == 'Ne'){
    echo $row["actaea_racemosa_4"]='';
    }else{
    echo $row["actaea_racemosa_4"].',<br> ';
    }
    if($row["actaea_spicata_5"] == 'Ne'){
    echo $row["actaea_spicata_5"]='';
    }else{
    echo $row["actaea_spicata_5"].',<br> ';
    }
    if($row["aesculus_hippocastanum_6"] == 'Ne'){
    echo $row["aesculus_hippocastanum_6"]='';
    }else{
    echo $row["aesculus_hippocastanum_6"].',<br> ';
    }
    if($row["aethusa_cynapium_7"] == 'Ne'){
    echo $row["aethusa_cynapium_7"]='';
    }else{
    echo $row["aethusa_cynapium_7"].',<br> ';
    }
    if($row["agaricus_muscarius_8"] == 'Ne'){
    echo $row["agaricus_muscarius_8"]='';
    }else{
    echo $row["agaricus_muscarius_8"].',<br> ';
    }
    if($row["agnus_castus_9"] == 'Ne'){
    echo $row["agnus_castus_9"]='';
    }else{
    echo $row["agnus_castus_9"].',<br> ';
    }
    if($row["agraphis_nutans_10"] == 'Ne'){
    echo $row["agraphis_nutans_10"]='';
    }else{
    echo $row["agraphis_nutans_10"].',<br> ';
    }
    if($row["ailanthus_glandulosa_11"] == 'Ne'){
    echo $row["ailanthus_glandulosa_11"]='';
    }else{
    echo $row["ailanthus_glandulosa_11"].',<br> ';
    }
    if($row["allium_cepa_12"] == 'Ne'){
    echo $row["allium_cepa_12"]='';
    }else{
    echo $row["allium_cepa_12"].',<br> ';
    }
    if($row["allium_sativum_13"] == 'Ne'){
    echo $row["allium_sativum_13"]='';
    }else{
    echo $row["allium_sativum_13"].',<br> ';
    }
    if($row["aloe_socotrina_14"] == 'Ne'){
    echo $row["aloe_socotrina_14"]='';
    }else{
    echo $row["aloe_socotrina_14"].',<br> ';
    }
    if($row["alumina_15"] == 'Ne'){
    echo $row["alumina_15"]='';
    }else{
    echo $row["alumina_15"].',<br> ';
    }
    if($row["ambra_grisea_16"] == 'Ne'){
    echo $row["ambra_grisea_16"]='';
    }else{
    echo $row["ambra_grisea_16"].',<br> ';
    }
    if($row["ammonium_carbonicum_17"] == 'Ne'){
    echo $row["ammonium_carbonicum_17"]='';
    }else{
    echo $row["ammonium_carbonicum_17"].',<br> ';
    }
    if($row["ammonium_muriaticum_18"] == 'Ne'){
    echo $row["ammonium_muriaticum_18"]='';
    }else{
    echo $row["ammonium_muriaticum_18"].',<br> ';
    }
    if($row["amylium_nitrosum_19"] == 'Ne'){
    echo $row["amylium_nitrosum_19"]='';
    }else{
    echo $row["amylium_nitrosum_19"].',<br> ';
    }
    if($row["anacardium_orientale_20"] == 'Ne'){
    echo $row["anacardium_orientale_20"]='';
    }else{
    echo $row["anacardium_orientale_20"].',<br> ';
    }
    if($row["anagallis_arvensis_21"] == 'Ne'){
    echo $row["anagallis_arvensis_21"]='';
    }else{
    echo $row["anagallis_arvensis_21"].',<br> ';
    }
    if($row["antimonium_crudum_22"] == 'Ne'){
    echo $row["antimonium_crudum_22"]='';
    }else{
    echo $row["antimonium_crudum_22"].',<br> ';
    }
    if($row["antimonium_tartaricum_23"] == 'Ne'){
    echo $row["antimonium_tartaricum_23"]='';
    }else{
    echo $row["antimonium_tartaricum_23"].',<br> ';
    }
    if($row["apis_mellifica_24"] == 'Ne'){
    echo $row["apis_mellifica_24"]='';
    }else{
    echo $row["apis_mellifica_24"].',<br> ';
    }
    if($row["aralia_racemosa_25"] == 'Ne'){
    echo $row["aralia_racemosa_25"]='';
    }else{
    echo $row["aralia_racemosa_25"].',<br> ';
    }
    if($row["aranea_diadema_26"] == 'Ne'){
    echo $row["aranea_diadema_26"]='';
    }else{
    echo $row["aranea_diadema_26"].',<br> ';
    }
    if($row["argentum_nitricum_27"] == 'Ne'){
    echo $row["argentum_nitricum_27"]='';
    }else{
    echo $row["argentum_nitricum_27"].',<br> ';
    }
    if($row["arnica_montana_28"] == 'Ne'){
    echo $row["arnica_montana_28"]='';
    }else{
    echo $row["arnica_montana_28"].',<br> ';
    }
    if($row["arsenicum_album_29"] == 'Ne'){
    echo $row["arsenicum_album_29"]='';
    }else{
    echo $row["arsenicum_album_29"].',<br> ';
    }
    if($row["arsenicum_iodatum_30"] == 'Ne'){
    echo $row["arsenicum_iodatum_30"]='';
    }else{
    echo $row["arsenicum_iodatum_30"].',<br> ';
    }
    if($row["arum_triphyllum_31"] == 'Ne'){
    echo $row["arum_triphyllum_31"]='';
    }else{
    echo $row["arum_triphyllum_31"].',<br> ';
    }
    if($row["asa_foetida_32"] == 'Ne'){
    echo $row["asa_foetida_32"]='';
    }else{
    echo $row["asa_foetida_32"].',<br> ';
    }
    if($row["aurum_metallicum_33"] == 'Ne'){
    echo $row["aurum_metallicum_33"]='';
    }else{
    echo $row["aurum_metallicum_33"].',<br> ';
    }
    if($row["aurum_muriaticum_natronatum_34"] == 'Ne'){
    echo $row["aurum_muriaticum_natronatum_34"]='';
    }else{
    echo $row["aurum_muriaticum_natronatum_34"].',<br> ';
    }
    if($row["avena_sativa_35"] == 'Ne'){
    echo $row["avena_sativa_35"]='';
    }else{
    echo $row["avena_sativa_35"].',<br> ';
    }
    if($row["baryta_carbonica_36"] == 'Ne'){
    echo $row["baryta_carbonica_36"]='';
    }else{
    echo $row["baryta_carbonica_36"].',<br> ';
    }
    if($row["baryta_iodata_37"] == 'Ne'){
    echo $row["baryta_iodata_37"]='';
    }else{
    echo $row["baryta_iodata_37"].',<br> ';
    }
    if($row["baryta_muriatica_38"] == 'Ne'){
    echo $row["baryta_muriatica_38"]='';
    }else{
    echo $row["baryta_muriatica_38"].',<br> ';
    }
    if($row["belladonna_39"] == 'Ne'){
    echo $row["belladonna_39"]='';
    }else{
    echo $row["belladonna_39"].',<br> ';
    }
    if($row["bellis_perennis_40"] == 'Ne'){
    echo $row["bellis_perennis_40"]='';
    }else{
    echo $row["bellis_perennis_40"].',<br> ';
    }
    if($row["benzoicum_acidum_41"] == 'Ne'){
    echo $row["benzoicum_acidum_41"]='';
    }else{
    echo $row["benzoicum_acidum_41"].',<br> ';
    }
    if($row["berberis_vulgaris_42"] == 'Ne'){
    echo $row["berberis_vulgaris_42"]='';
    }else{
    echo $row["berberis_vulgaris_42"].',<br> ';
    }
    if($row["bismuthum_43"] == 'Ne'){
    echo $row["bismuthum_43"]='';
    }else{
    echo $row["bismuthum_43"].',<br> ';
    }
    if($row["blatta_orientalis_44"] == 'Ne'){
    echo $row["blatta_orientalis_44"]='';
    }else{
    echo $row["blatta_orientalis_44"].',<br> ';
    }
    if($row["borax_45"] == 'Ne'){
    echo $row["borax_45"]='';
    }else{
    echo $row["borax_45"].',<br> ';
    }
    if($row["bromum_46"] == 'Ne'){
    echo $row["bromum_46"]='';
    }else{
    echo $row["bromum_46"].',<br> ';
    }
    if($row["bryonia_47"] == 'Ne'){
    echo $row["bryonia_47"]='';
    }else{
    echo $row["bryonia_47"].',<br> ';
    }
    if($row["bufo_rana_48"] == 'Ne'){
    echo $row["bufo_rana_48"]='';
    }else{
    echo $row["bufo_rana_48"].',<br> ';
    }
    if($row["cactus_grandiflorus_49"] == 'Ne'){
    echo $row["cactus_grandiflorus_49"]='';
    }else{
    echo $row["cactus_grandiflorus_49"].',<br> ';
    }
    if($row["cadmium_sulfuricum_50"] == 'Ne'){
    echo $row["cadmium_sulfuricum_50"]='';
    }else{
    echo $row["cadmium_sulfuricum_50"].',<br> ';
    }
    if($row["caladium_seguinum_51"] == 'Ne'){
    echo $row["caladium_seguinum_51"]='';
    }else{
    echo $row["caladium_seguinum_51"].',<br> ';
    }
    if($row["calcarea_carbonica_52"] == 'Ne'){
    echo $row["calcarea_carbonica_52"]='';
    }else{
    echo $row["calcarea_carbonica_52"].',<br> ';
    }
    if($row["calcarea_fluorica_53"] == 'Ne'){
    echo $row["calcarea_fluorica_53"]='';
    }else{
    echo $row["calcarea_fluorica_53"].',<br> ';
    }
    if($row["calcarea_phosphorica_54"] == 'Ne'){
    echo $row["calcarea_phosphorica_54"]='';
    }else{
    echo $row["calcarea_phosphorica_54"].',<br> ';
    }
    if($row["calcarea_sulfurica_55"] == 'Ne'){
    echo $row["calcarea_sulfurica_55"]='';
    }else{
    echo $row["calcarea_sulfurica_55"].',<br> ';
    }
    if($row["calendula_officinalis_56"] == 'Ne'){
    echo $row["calendula_officinalis_56"]='';
    }else{
    echo $row["calendula_officinalis_56"].',<br> ';
    }
    if($row["cantharis_57"] == 'Ne'){
    echo $row["cantharis_57"]='';
    }else{
    echo $row["cantharis_57"].',<br> ';
    }
    if($row["capsicum_annuum_58"] == 'Ne'){
    echo $row["capsicum_annuum_58"]='';
    }else{
    echo $row["capsicum_annuum_58"].',<br> ';
    }
    if($row["carbo_animalis_59"] == 'Ne'){
    echo $row["carbo_animalis_59"]='';
    }else{
    echo $row["carbo_animalis_59"].',<br> ';
    }
    if($row["carbo_vegetabilis_60"] == 'Ne'){
    echo $row["carbo_vegetabilis_60"]='';
    }else{
    echo $row["carbo_vegetabilis_60"].',<br> ';
    }
    if($row["carduus_marianus_61"] == 'Ne'){
    echo $row["carduus_marianus_61"]='';
    }else{
    echo $row["carduus_marianus_61"].',<br> ';
    }
    if($row["caulophyllum_thalictroides_62"] == 'Ne'){
    echo $row["caulophyllum_thalictroides_62"]='';
    }else{
    echo $row["caulophyllum_thalictroides_62"].',<br> ';
    }
    if($row["causticum_63"] == 'Ne'){
    echo $row["causticum_63"]='';
    }else{
    echo $row["causticum_63"].',<br> ';
    }
    if($row["cicuta_virosa_64"] == 'Ne'){
    echo $row["cicuta_virosa_64"]='';
    }else{
    echo $row["cicuta_virosa_64"].',<br> ';
    }
    if($row["cina_65"] == 'Ne'){
    echo $row["cina_65"]='';
    }else{
    echo $row["cina_65"].',<br> ';
    }
    if($row["cinnabaris_66"] == 'Ne'){
    echo $row["cinnabaris_66"]='';
    }else{
    echo $row["cinnabaris_66"].',<br> ';
    }
    if($row["clematis_erecta_67"] == 'Ne'){
    echo $row["clematis_erecta_67"]='';
    }else{
    echo $row["clematis_erecta_67"].',<br> ';
    }
    if($row["cocculus_indicus_68"] == 'Ne'){
    echo $row["cocculus_indicus_68"]='';
    }else{
    echo $row["cocculus_indicus_68"].',<br> ';
    }
    if($row["coccus_cacti_69"] == 'Ne'){
    echo $row["coccus_cacti_69"]='';
    }else{
    echo $row["coccus_cacti_69"].',<br> ';
    }
    if($row["coffea_cruda_70"] == 'Ne'){
    echo $row["coffea_cruda_70"]='';
    }else{
    echo $row["coffea_cruda_70"].',<br> ';
    }
    if($row["colchicum_autumnale_71"] == 'Ne'){
    echo $row["colchicum_autumnale_71"]='';
    }else{
    echo $row["colchicum_autumnale_71"].',<br> ';
    }
    if($row["colocynthis_72"] == 'Ne'){
    echo $row["colocynthis_72"]='';
    }else{
    echo $row["colocynthis_72"].',<br> ';
    }
    if($row["condurango_73"] == 'Ne'){
    echo $row["condurango_73"]='';
    }else{
    echo $row["condurango_73"].',<br> ';
    }
    if($row["conium_maculatum_74"] == 'Ne'){
    echo $row["conium_maculatum_74"]='';
    }else{
    echo $row["conium_maculatum_74"].',<br> ';
    }
    if($row["corallium_rubrum_75"] == 'Ne'){
    echo $row["corallium_rubrum_75"]='';
    }else{
    echo $row["corallium_rubrum_75"].',<br> ';
    }
    if($row["crataegus_oxyacantha_76"] == 'Ne'){
    echo $row["crataegus_oxyacantha_76"]='';
    }else{
    echo $row["crataegus_oxyacantha_76"].',<br> ';
    }
    if($row["crocus_sativus_77"] == 'Ne'){
    echo $row["crocus_sativus_77"]='';
    }else{
    echo $row["crocus_sativus_77"].',<br> ';
    }
    if($row["croton_tiglium_78"] == 'Ne'){
    echo $row["croton_tiglium_78"]='';
    }else{
    echo $row["croton_tiglium_78"].',<br> ';
    }
    if($row["cuprum_arsenicosum_79"] == 'Ne'){
    echo $row["cuprum_arsenicosum_79"]='';
    }else{
    echo $row["cuprum_arsenicosum_79"].',<br> ';
    }
    if($row["cuprum_metallicum_80"] == 'Ne'){
    echo $row["cuprum_metallicum_80"]='';
    }else{
    echo $row["cuprum_metallicum_80"].',<br> ';
    }
    if($row["cyclamen_europaeum_81"] == 'Ne'){
    echo $row["cyclamen_europaeum_81"]='';
    }else{
    echo $row["cyclamen_europaeum_81"].',<br> ';
    }
    if($row["cypripedium_pubescens_82"] == 'Ne'){
    echo $row["cypripedium_pubescens_82"]='';
    }else{
    echo $row["cypripedium_pubescens_82"].',<br> ';
    }
    if($row["digitalis_purpurea_83"] == 'Ne'){
    echo $row["digitalis_purpurea_83"]='';
    }else{
    echo $row["digitalis_purpurea_83"].',<br> ';
    }
    if($row["dolichos_pruriens_84"] == 'Ne'){
    echo $row["dolichos_pruriens_84"]='';
    }else{
    echo $row["dolichos_pruriens_84"].',<br> ';
    }
    if($row["drosera_85"] == 'Ne'){
    echo $row["drosera_85"]='';
    }else{
    echo $row["drosera_85"].',<br> ';
    }
    if($row["dulcamara_86"] == 'Ne'){
    echo $row["dulcamara_86"]='';
    }else{
    echo $row["dulcamara_86"].',<br> ';
    }
    if($row["echinacea_angustifolia_87"] == 'Ne'){
    echo $row["echinacea_angustifolia_87"]='';
    }else{
    echo $row["echinacea_angustifolia_87"].',<br> ';
    }
    if($row["equisetum_hiemale_88"] == 'Ne'){
    echo $row["equisetum_hiemale_88"]='';
    }else{
    echo $row["equisetum_hiemale_88"].',<br> ';
    }
    if($row["eugenia_jambosa_89"] == 'Ne'){
    echo $row["eugenia_jambosa_89"]='';
    }else{
    echo $row["eugenia_jambosa_89"].',<br> ';
    }
    if($row["eupatorium_perfoliatum_90"] == 'Ne'){
    echo $row["eupatorium_perfoliatum_90"]='';
    }else{
    echo $row["eupatorium_perfoliatum_90"].',<br> ';
    }
    if($row["euphrasia_officinalis_91"] == 'Ne'){
    echo $row["euphrasia_officinalis_91"]='';
    }else{
    echo $row["euphrasia_officinalis_91"].',<br> ';
    }
    if($row["ferrum_metallicum_92"] == 'Ne'){
    echo $row["ferrum_metallicum_92"]='';
    }else{
    echo $row["ferrum_metallicum_92"].',<br> ';
    }
    if($row["ferrum_phosphoricum_93"] == 'Ne'){
    echo $row["ferrum_phosphoricum_93"]='';
    }else{
    echo $row["ferrum_phosphoricum_93"].',<br> ';
    }
    if($row["fluoricum_acidum_94"] == 'Ne'){
    echo $row["fluoricum_acidum_94"]='';
    }else{
    echo $row["fluoricum_acidum_94"].',<br> ';
    }
    if($row["folliculinum_95"] == 'Ne'){
    echo $row["folliculinum_95"]='';
    }else{
    echo $row["folliculinum_95"].',<br> ';
    }
    if($row["formica_rufa_96"] == 'Ne'){
    echo $row["formica_rufa_96"]='';
    }else{
    echo $row["formica_rufa_96"].',<br> ';
    }
    if($row["fucus_vesiculosus_97"] == 'Ne'){
    echo $row["fucus_vesiculosus_97"]='';
    }else{
    echo $row["fucus_vesiculosus_97"].',<br> ';
    }
    if($row["gelsemium_sempervirens_98"] == 'Ne'){
    echo $row["gelsemium_sempervirens_98"]='';
    }else{
    echo $row["gelsemium_sempervirens_98"].',<br> ';
    }
    if($row["ginkgo_biloba_99"] == 'Ne'){
    echo $row["ginkgo_biloba_99"]='';
    }else{
    echo $row["ginkgo_biloba_99"].',<br> ';
    }
    if($row["glonoinum_100"] == 'Ne'){
    echo $row["glonoinum_100"]='';
    }else{
    echo $row["glonoinum_100"].',<br> ';
    }
    if($row["graphites_101"] == 'Ne'){
    echo $row["graphites_101"]='';
    }else{
    echo $row["graphites_101"].',<br> ';
    }
    if($row["guaiacum_102"] == 'Ne'){
    echo $row["guaiacum_102"]='';
    }else{
    echo $row["guaiacum_102"].',<br> ';
    }
    if($row["hamamelis_virginiana_103"] == 'Ne'){
    echo $row["hamamelis_virginiana_103"]='';
    }else{
    echo $row["hamamelis_virginiana_103"].',<br> ';
    }
    if($row["harpagophytum_procumbens_104"] == 'Ne'){
    echo $row["harpagophytum_procumbens_104"]='';
    }else{
    echo $row["harpagophytum_procumbens_104"].',<br> ';
    }
    if($row["hekla_lava_105"] == 'Ne'){
    echo $row["hekla_lava_105"]='';
    }else{
    echo $row["hekla_lava_105"].',<br> ';
    }
    if($row["helonias_dioica_106"] == 'Ne'){
    echo $row["helonias_dioica_106"]='';
    }else{
    echo $row["helonias_dioica_106"].',<br> ';
    }
    if($row["hepar_sulfuris_calcareum_107"] == 'Ne'){
    echo $row["hepar_sulfuris_calcareum_107"]='';
    }else{
    echo $row["hepar_sulfuris_calcareum_107"].',<br> ';
    }
    if($row["histaminum_108"] == 'Ne'){
    echo $row["histaminum_108"]='';
    }else{
    echo $row["histaminum_108"].',<br> ';
    }
    if($row["hydrastis_canadensis_109"] == 'Ne'){
    echo $row["hydrastis_canadensis_109"]='';
    }else{
    echo $row["hydrastis_canadensis_109"].',<br> ';
    }
    if($row["hydrocotyle_asiatica_110"] == 'Ne'){
    echo $row["hydrocotyle_asiatica_110"]='';
    }else{
    echo $row["hydrocotyle_asiatica_110"].',<br> ';
    }
    if($row["hyoscyamus_niger_111"] == 'Ne'){
    echo $row["hyoscyamus_niger_111"]='';
    }else{
    echo $row["hyoscyamus_niger_111"].',<br> ';
    }
    if($row["hypericum_perforatum_112"] == 'Ne'){
    echo $row["hypericum_perforatum_112"]='';
    }else{
    echo $row["hypericum_perforatum_112"].',<br> ';
    }
    if($row["chamomilla_vulgaris_113"] == 'Ne'){
    echo $row["chamomilla_vulgaris_113"]='';
    }else{
    echo $row["chamomilla_vulgaris_113"].',<br> ';
    }
    if($row["chelidonium_majus_114"] == 'Ne'){
    echo $row["chelidonium_majus_114"]='';
    }else{
    echo $row["chelidonium_majus_114"].',<br> ';
    }
    if($row["china_115"] == 'Ne'){
    echo $row["china_115"]='';
    }else{
    echo $row["china_115"].',<br> ';
    }
    if($row["chininum_sulfuricum_116"] == 'Ne'){
    echo $row["chininum_sulfuricum_116"]='';
    }else{
    echo $row["chininum_sulfuricum_116"].',<br> ';
    }
    if($row["ignatia_amara_117"] == 'Ne'){
    echo $row["ignatia_amara_117"]='';
    }else{
    echo $row["ignatia_amara_117"].',<br> ';
    }
    if($row["influenzinum_118"] == 'Ne'){
    echo $row["influenzinum_118"]='';
    }else{
    echo $row["influenzinum_118"].',<br> ';
    }
    if($row["iodum_119"] == 'Ne'){
    echo $row["iodum_119"]='';
    }else{
    echo $row["iodum_119"].',<br> ';
    }
    if($row["ipecacuanha_120"] == 'Ne'){
    echo $row["ipecacuanha_120"]='';
    }else{
    echo $row["ipecacuanha_120"].',<br> ';
    }
    if($row["iris_versicolor_121"] == 'Ne'){
    echo $row["iris_versicolor_121"]='';
    }else{
    echo $row["iris_versicolor_121"].',<br> ';
    }
    if($row["jalapa_122"] == 'Ne'){
    echo $row["jalapa_122"]='';
    }else{
    echo $row["jalapa_122"].',<br> ';
    }
    if($row["kalium_arsenicosum_123"] == 'Ne'){
    echo $row["kalium_arsenicosum_123"]='';
    }else{
    echo $row["kalium_arsenicosum_123"].',<br> ';
    }
    if($row["kalium_bichromicum_124"] == 'Ne'){
    echo $row["kalium_bichromicum_124"]='';
    }else{
    echo $row["kalium_bichromicum_124"].',<br> ';
    }
    if($row["kalium_bromatum_125"] == 'Ne'){
    echo $row["kalium_bromatum_125"]='';
    }else{
    echo $row["kalium_bromatum_125"].',<br> ';
    }
    if($row["kalium_carbonicum_126"] == 'Ne'){
    echo $row["kalium_carbonicum_126"]='';
    }else{
    echo $row["kalium_carbonicum_126"].',<br> ';
    }
    if($row["kalium_iodatum_127"] == 'Ne'){
    echo $row["kalium_iodatum_127"]='';
    }else{
    echo $row["kalium_iodatum_127"].',<br> ';
    }
    if($row["kalium_muriaticum_128"] == 'Ne'){
    echo $row["kalium_muriaticum_128"]='';
    }else{
    echo $row["kalium_muriaticum_128"].',<br> ';
    }
    if($row["kalium_phosphoricum_129"] == 'Ne'){
    echo $row["kalium_phosphoricum_129"]='';
    }else{
    echo $row["kalium_phosphoricum_129"].',<br> ';
    }
    if($row["kalium_sulfuricum_130"] == 'Ne'){
    echo $row["kalium_sulfuricum_130"]='';
    }else{
    echo $row["kalium_sulfuricum_130"].',<br> ';
    }
    if($row["kalmia_latifolia_131"] == 'Ne'){
    echo $row["kalmia_latifolia_131"]='';
    }else{
    echo $row["kalmia_latifolia_131"].',<br> ';
    }
    if($row["kreosotum_132"] == 'Ne'){
    echo $row["kreosotum_132"]='';
    }else{
    echo $row["kreosotum_132"].',<br> ';
    }
    if($row["lac_caninum_133"] == 'Ne'){
    echo $row["lac_caninum_133"]='';
    }else{
    echo $row["lac_caninum_133"].',<br> ';
    }
    if($row["lachesis_mutus_134"] == 'Ne'){
    echo $row["lachesis_mutus_134"]='';
    }else{
    echo $row["lachesis_mutus_134"].',<br> ';
    }
    if($row["lachnanthes_tinctoria_135"] == 'Ne'){
    echo $row["lachnanthes_tinctoria_135"]='';
    }else{
    echo $row["lachnanthes_tinctoria_135"].',<br> ';
    }
    if($row["ledum_palustre_136"] == 'Ne'){
    echo $row["ledum_palustre_136"]='';
    }else{
    echo $row["ledum_palustre_136"].',<br> ';
    }
    if($row["lilium_tigrinum_137"] == 'Ne'){
    echo $row["lilium_tigrinum_137"]='';
    }else{
    echo $row["lilium_tigrinum_137"].',<br> ';
    }
    if($row["lithium_carbonicum_138"] == 'Ne'){
    echo $row["lithium_carbonicum_138"]='';
    }else{
    echo $row["lithium_carbonicum_138"].',<br> ';
    }
    if($row["lobelia_inflata_139"] == 'Ne'){
    echo $row["lobelia_inflata_139"]='';
    }else{
    echo $row["lobelia_inflata_139"].',<br> ';
    }
    if($row["luteinum_140"] == 'Ne'){
    echo $row["luteinum_140"]='';
    }else{
    echo $row["luteinum_140"].',<br> ';
    }
    if($row["lycopodium_clavatum_141"] == 'Ne'){
    echo $row["lycopodium_clavatum_141"]='';
    }else{
    echo $row["lycopodium_clavatum_141"].',<br> ';
    }
    if($row["magnesia_carbonica_142"] == 'Ne'){
    echo $row["magnesia_carbonica_142"]='';
    }else{
    echo $row["magnesia_carbonica_142"].',<br> ';
    }
    if($row["magnesia_muriatica_143"] == 'Ne'){
    echo $row["magnesia_muriatica_143"]='';
    }else{
    echo $row["magnesia_muriatica_143"].',<br> ';
    }
    if($row["magnesia_phosphorica_144"] == 'Ne'){
    echo $row["magnesia_phosphorica_144"]='';
    }else{
    echo $row["magnesia_phosphorica_144"].',<br> ';
    }
    if($row["manganum_aceticum_145"] == 'Ne'){
    echo $row["manganum_aceticum_145"]='';
    }else{
    echo $row["manganum_aceticum_145"].',<br> ';
    }
    if($row["manganum_metallicum_146"] == 'Ne'){
    echo $row["manganum_metallicum_146"]='';
    }else{
    echo $row["manganum_metallicum_146"].',<br> ';
    }
    if($row["mercurius_corrosivus_147"] == 'Ne'){
    echo $row["mercurius_corrosivus_147"]='';
    }else{
    echo $row["mercurius_corrosivus_147"].',<br> ';
    }
    if($row["mercurius_cyanatus_148"] == 'Ne'){
    echo $row["mercurius_cyanatus_148"]='';
    }else{
    echo $row["mercurius_cyanatus_148"].',<br> ';
    }
    if($row["mercurius_dulcis_149"] == 'Ne'){
    echo $row["mercurius_dulcis_149"]='';
    }else{
    echo $row["mercurius_dulcis_149"].',<br> ';
    }
    if($row["mercurius_solubilis_150"] == 'Ne'){
    echo $row["mercurius_solubilis_150"]='';
    }else{
    echo $row["mercurius_solubilis_150"].',<br> ';
    }
    if($row["mezereum_151"] == 'Ne'){
    echo $row["mezereum_151"]='';
    }else{
    echo $row["mezereum_151"].',<br> ';
    }
    if($row["millefolium_152"] == 'Ne'){
    echo $row["millefolium_152"]='';
    }else{
    echo $row["millefolium_152"].',<br> ';
    }
    if($row["moschus_153"] == 'Ne'){
    echo $row["moschus_153"]='';
    }else{
    echo $row["moschus_153"].',<br> ';
    }
    if($row["muriaticum_acidum_154"] == 'Ne'){
    echo $row["muriaticum_acidum_154"]='';
    }else{
    echo $row["muriaticum_acidum_154"].',<br> ';
    }
    if($row["naja_tripudians_155"] == 'Ne'){
    echo $row["naja_tripudians_155"]='';
    }else{
    echo $row["naja_tripudians_155"].',<br> ';
    }
    if($row["natrum_carbonicum_156"] == 'Ne'){
    echo $row["natrum_carbonicum_156"]='';
    }else{
    echo $row["natrum_carbonicum_156"].',<br> ';
    }
    if($row["natrum_muriaticum_157"] == 'Ne'){
    echo $row["natrum_muriaticum_157"]='';
    }else{
    echo $row["natrum_muriaticum_157"].',<br> ';
    }
    if($row["natrum_phosphoricum_158"] == 'Ne'){
    echo $row["natrum_phosphoricum_158"]='';
    }else{
    echo $row["natrum_phosphoricum_158"].',<br> ';
    }
    if($row["natrum_sulfuricum_159"] == 'Ne'){
    echo $row["natrum_sulfuricum_159"]='';
    }else{
    echo $row["natrum_sulfuricum_159"].',<br> ';
    }
    if($row["nitricum_acidum_160"] == 'Ne'){
    echo $row["nitricum_acidum_160"]='';
    }else{
    echo $row["nitricum_acidum_160"].',<br> ';
    }
    if($row["nux_moschata_161"] == 'Ne'){
    echo $row["nux_moschata_161"]='';
    }else{
    echo $row["nux_moschata_161"].',<br> ';
    }
    if($row["nux_vomica_162"] == 'Ne'){
    echo $row["nux_vomica_162"]='';
    }else{
    echo $row["nux_vomica_162"].',<br> ';
    }
    if($row["oleander_163"] == 'Ne'){
    echo $row["oleander_163"]='';
    }else{
    echo $row["oleander_163"].',<br> ';
    }
    if($row["opium_164"] == 'Ne'){
    echo $row["opium_164"]='';
    }else{
    echo $row["opium_164"].',<br> ';
    }
    if($row["oxalicum_acidum_165"] == 'Ne'){
    echo $row["oxalicum_acidum_165"]='';
    }else{
    echo $row["oxalicum_acidum_165"].',<br> ';
    }
    if($row["petroleum_166"] == 'Ne'){
    echo $row["petroleum_166"]='';
    }else{
    echo $row["petroleum_166"].',<br> ';
    }
    if($row["phosphoricum_acidum_167"] == 'Ne'){
    echo $row["phosphoricum_acidum_167"]='';
    }else{
    echo $row["phosphoricum_acidum_167"].',<br> ';
    }
    if($row["phosphorus_168"] == 'Ne'){
    echo $row["phosphorus_168"]='';
    }else{
    echo $row["phosphorus_168"].',<br> ';
    }
    if($row["phytolacca_decandra_169"] == 'Ne'){
    echo $row["phytolacca_decandra_169"]='';
    }else{
    echo $row["phytolacca_decandra_169"].',<br> ';
    }
    if($row["pix_liquida_170"] == 'Ne'){
    echo $row["pix_liquida_170"]='';
    }else{
    echo $row["pix_liquida_170"].',<br> ';
    }
    if($row["plantago_major_171"] == 'Ne'){
    echo $row["plantago_major_171"]='';
    }else{
    echo $row["plantago_major_171"].',<br> ';
    }
    if($row["platina_172"] == 'Ne'){
    echo $row["platina_172"]='';
    }else{
    echo $row["platina_172"].',<br> ';
    }
    if($row["plumbum_metallicum_173"] == 'Ne'){
    echo $row["plumbum_metallicum_173"]='';
    }else{
    echo $row["plumbum_metallicum_173"].',<br> ';
    }
    if($row["podophyllum_peltatum_174"] == 'Ne'){
    echo $row["podophyllum_peltatum_174"]='';
    }else{
    echo $row["podophyllum_peltatum_174"].',<br> ';
    }
    if($row["pollen_de_graminees_175"] == 'Ne'){
    echo $row["pollen_de_graminees_175"]='';
    }else{
    echo $row["pollen_de_graminees_175"].',<br> ';
    }
    if($row["pollens_176"] == 'Ne'){
    echo $row["pollens_176"]='';
    }else{
    echo $row["pollens_176"].',<br> ';
    }
    if($row["poumon_histamine_177"] == 'Ne'){
    echo $row["poumon_histamine_177"]='';
    }else{
    echo $row["poumon_histamine_177"].',<br> ';
    }
    if($row["pulsatilla_178"] == 'Ne'){
    echo $row["pulsatilla_178"]='';
    }else{
    echo $row["pulsatilla_178"].',<br> ';
    }
    if($row["pyrogenium_179"] == 'Ne'){
    echo $row["pyrogenium_179"]='';
    }else{
    echo $row["pyrogenium_179"].',<br> ';
    }
    if($row["rhododendron_chrysanthum_180"] == 'Ne'){
    echo $row["rhododendron_chrysanthum_180"]='';
    }else{
    echo $row["rhododendron_chrysanthum_180"].',<br> ';
    }
    if($row["rhus_toxicodendron_181"] == 'Ne'){
    echo $row["rhus_toxicodendron_181"]='';
    }else{
    echo $row["rhus_toxicodendron_181"].',<br> ';
    }
    if($row["ricinus_communis_182"] == 'Ne'){
    echo $row["ricinus_communis_182"]='';
    }else{
    echo $row["ricinus_communis_182"].',<br> ';
    }
    if($row["robinia_pseudo_acacia_183"] == 'Ne'){
    echo $row["robinia_pseudo_acacia_183"]='';
    }else{
    echo $row["robinia_pseudo_acacia_183"].',<br> ';
    }
    if($row["rumex_crispus_184"] == 'Ne'){
    echo $row["rumex_crispus_184"]='';
    }else{
    echo $row["rumex_crispus_184"].',<br> ';
    }
    if($row["ruta_graveolens_185"] == 'Ne'){
    echo $row["ruta_graveolens_185"]='';
    }else{
    echo $row["ruta_graveolens_185"].',<br> ';
    }
    if($row["sabadilla_186"] == 'Ne'){
    echo $row["sabadilla_186"]='';
    }else{
    echo $row["sabadilla_186"].',<br> ';
    }
    if($row["sabal_serrulata_187"] == 'Ne'){
    echo $row["sabal_serrulata_187"]='';
    }else{
    echo $row["sabal_serrulata_187"].',<br> ';
    }
    if($row["sabina_188"] == 'Ne'){
    echo $row["sabina_188"]='';
    }else{
    echo $row["sabina_188"].',<br> ';
    }
    if($row["sambucus_nigra_189"] == 'Ne'){
    echo $row["sambucus_nigra_189"]='';
    }else{
    echo $row["sambucus_nigra_189"].',<br> ';
    }
    if($row["sanguinaria_canadensis_190"] == 'Ne'){
    echo $row["sanguinaria_canadensis_190"]='';
    }else{
    echo $row["sanguinaria_canadensis_190"].',<br> ';
    }
    if($row["sarsaparilla_191"] == 'Ne'){
    echo $row["sarsaparilla_191"]='';
    }else{
    echo $row["sarsaparilla_191"].',<br> ';
    }
    if($row["secale_cornutum_192"] == 'Ne'){
    echo $row["secale_cornutum_192"]='';
    }else{
    echo $row["secale_cornutum_192"].',<br> ';
    }
    if($row["selenium_metallicum_193"] == 'Ne'){
    echo $row["selenium_metallicum_193"]='';
    }else{
    echo $row["selenium_metallicum_193"].',<br> ';
    }
    if($row["senna_194"] == 'Ne'){
    echo $row["senna_194"]='';
    }else{
    echo $row["senna_194"].',<br> ';
    }
    if($row["sepia_officinalis_195"] == 'Ne'){
    echo $row["sepia_officinalis_195"]='';
    }else{
    echo $row["sepia_officinalis_195"].',<br> ';
    }
    if($row["silicea_196"] == 'Ne'){
    echo $row["silicea_196"]='';
    }else{
    echo $row["silicea_196"].',<br> ';
    }
    if($row["solidago_virga_aurea_197"] == 'Ne'){
    echo $row["solidago_virga_aurea_197"]='';
    }else{
    echo $row["solidago_virga_aurea_197"].',<br> ';
    }
    if($row["spigelia_anthelmia_198"] == 'Ne'){
    echo $row["spigelia_anthelmia_198"]='';
    }else{
    echo $row["spigelia_anthelmia_198"].',<br> ';
    }
    if($row["spongia_tosta_199"] == 'Ne'){
    echo $row["spongia_tosta_199"]='';
    }else{
    echo $row["spongia_tosta_199"].',<br> ';
    }
    if($row["staphysagria_200"] == 'Ne'){
    echo $row["staphysagria_200"]='';
    }else{
    echo $row["staphysagria_200"].',<br> ';
    }
    if($row["sticta_pulmonaria_201"] == 'Ne'){
    echo $row["sticta_pulmonaria_201"]='';
    }else{
    echo $row["sticta_pulmonaria_201"].',<br> ';
    }
    if($row["stramonium_202"] == 'Ne'){
    echo $row["stramonium_202"]='';
    }else{
    echo $row["stramonium_202"].',<br> ';
    }
    if($row["sulfur_203"] == 'Ne'){
    echo $row["sulfur_203"]='';
    }else{
    echo $row["sulfur_203"].',<br> ';
    }
    if($row["sulfur_iodatum_204"] == 'Ne'){
    echo $row["sulfur_iodatum_204"]='';
    }else{
    echo $row["sulfur_iodatum_204"].',<br> ';
    }
    if($row["sulfuricum_acidum_205"] == 'Ne'){
    echo $row["sulfuricum_acidum_205"]='';
    }else{
    echo $row["sulfuricum_acidum_205"].',<br> ';
    }
    if($row["symphytum_officinale_206"] == 'Ne'){
    echo $row["symphytum_officinale_206"]='';
    }else{
    echo $row["symphytum_officinale_206"].',<br> ';
    }
    if($row["tabacum_207"] == 'Ne'){
    echo $row["tabacum_207"]='';
    }else{
    echo $row["tabacum_207"].',<br> ';
    }
    if($row["taraxacum_dens_leonis_208"] == 'Ne'){
    echo $row["taraxacum_dens_leonis_208"]='';
    }else{
    echo $row["taraxacum_dens_leonis_208"].',<br> ';
    }
    if($row["tarentula_hispana_209"] == 'Ne'){
    echo $row["tarentula_hispana_209"]='';
    }else{
    echo $row["tarentula_hispana_209"].',<br> ';
    }
    if($row["teucrium_marum_210"] == 'Ne'){
    echo $row["teucrium_marum_210"]='';
    }else{
    echo $row["teucrium_marum_210"].',<br> ';
    }
    if($row["thallium_aceticum_211"] == 'Ne'){
    echo $row["thallium_aceticum_211"]='';
    }else{
    echo $row["thallium_aceticum_211"].',<br> ';
    }
    if($row["thuya_occidentalis_212"] == 'Ne'){
    echo $row["thuya_occidentalis_212"]='';
    }else{
    echo $row["thuya_occidentalis_212"].',<br> ';
    }
    if($row["urtica_urens_213"] == 'Ne'){
    echo $row["urtica_urens_213"]='';
    }else{
    echo $row["urtica_urens_213"].',<br> ';
    }
    if($row["valeriana_officinalis_214"] == 'Ne'){
    echo $row["valeriana_officinalis_214"]='';
    }else{
    echo $row["valeriana_officinalis_214"].',<br> ';
    }
    if($row["veratrum_album_215"] == 'Ne'){
    echo $row["veratrum_album_215"]='';
    }else{
    echo $row["veratrum_album_215"].',<br> ';
    }
    if($row["viola_tricolor_216"] == 'Ne'){
    echo $row["viola_tricolor_216"]='';
    }else{
    echo $row["viola_tricolor_216"].',<br> ';
    }
    if($row["vipera_redi_217"] == 'Ne'){
    echo $row["vipera_redi_217"]='';
    }else{
    echo $row["vipera_redi_217"].',<br> ';
    }
    if($row["viscum_album_218"] == 'Ne'){
    echo $row["viscum_album_218"]='';
    }else{
    echo $row["viscum_album_218"].',<br> ';
    }
    if($row["zincum_metallicum_219"] == 'Ne'){
    echo $row["zincum_metallicum_219"]='';
    }else{
    echo $row["zincum_metallicum_219"].',<br> ';
    }
    if($row["camilia_220"] == 'Ne'){
    echo $row["camilia_220"]='';
    }else{
    echo $row["camilia_220"].',<br> ';
    }
    if($row["cocculine_221"] == 'Ne'){
    echo $row["cocculine_221"]='';
    }else{
    echo $row["cocculine_221"].',<br> ';
    }
    if($row["coryzalia_222"] == 'Ne'){
    echo $row["coryzalia_222"]='';
    }else{
    echo $row["coryzalia_222"].',<br> ';
    }
    if($row["drosetux_223"] == 'Ne'){
    echo $row["drosetux_223"]='';
    }else{
    echo $row["drosetux_223"].',<br> ';
    }
    if($row["neo_224"] == 'Ne'){
    echo $row["neo_224"]='';
    }else{
    echo $row["neo_224"].',<br> ';
    }
    if($row["gastrocynesine_225"] == 'Ne'){
    echo $row["gastrocynesine_225"]='';
    }else{
    echo $row["gastrocynesine_225"].',<br> ';
    }
    if($row["homeogene_9_226"] == 'Ne'){
    echo $row["homeogene_9_226"]='';
    }else{
    echo $row["homeogene_9_226"].',<br> ';
    }
    if($row["homeovox_227"] == 'Ne'){
    echo $row["homeovox_227"]='';
    }else{
    echo $row["homeovox_227"].',<br> ';
    }
    if($row["oscillococcinum_228"] == 'Ne'){
    echo $row["oscillococcinum_228"]='';
    }else{
    echo $row["oscillococcinum_228"].',<br> ';
    }
    if($row["paragrippe_229"] == 'Ne'){
    echo $row["paragrippe_229"]='';
    }else{
    echo $row["paragrippe_229"].',<br> ';
    }
    if($row["rhinallergy_230"] == 'Ne'){
    echo $row["rhinallergy_230"]='';
    }else{
    echo $row["rhinallergy_230"].',<br> ';
    }
    if($row["sedalia_231"] == 'Ne'){
    echo $row["sedalia_231"]='';
    }else{
    echo $row["sedalia_231"].',<br> ';
    }
    if($row["sedatif_pc_232"] == 'Ne'){
    echo $row["sedatif_pc_232"]='';
    }else{
    echo $row["sedatif_pc_232"].',<br> ';
    }












    }

}


?>