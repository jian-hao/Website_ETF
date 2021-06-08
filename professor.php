<div style="margin: 30px 50px 0px 0px;">
	<img src="images/professor.png" style="width:1000px;">
	</br>
	</br>
	<?php
		$paper = $arrayName = array(
			'Chun-Hsien Wang, Hsien-Chien Hsieh, Zhen-Wei Sun, V. K. Ranganayakulu, Tian-Wey Lan, Yang-Yuan Chen, Ying-Yi Chang, and <strong>Albert T. Wu</strong>* (2020, May). Interfacial stability in Bi2Te3 thermoelectric joints. ACS Appl. Mater. Interfaces, 12, 27001–27009.',
			'Hsien-Chien Hsieh, Chun-Hsien Wang, Tian-Wey Lan, Tse-Hsiao Lee, Yang-Yuan Chen, Hsu-Shen Chu, <b>Albert T. Wu</b>* (2020, May). Joint properties enhancement for PbTe thermoelectric materials by addition of diffusion barrier. Materials Chemistry and Physics, 246, 122848.',
			'Tsan-Hsien Tseng, Chih-Han Yang, Jeng-Yu Chiang, Jyun-Jhe Huang, Chih-Hao Chen, Shih-Kang Lin, Chang-Meng Wang, <b>Albert T. Wu</b>* (2019, June). Interfacial reactions of 68In–32Bi, 50In–50Bi and 33In–67Bi low melting alloys on Cu substrates. Materials Science and Engineering: A, 759, 506-513.',
			'Chun-Hsien Wang, Hsien-Chien Hsieh, Hsin-Yi Lee, <b>Albert T. Wu</b>* (2018, Oct). Co-P diffusion barrier for p-Bi2Te3 thermoelectric material. Journal of Electronic Materials, 48, 53-57.',
			'W.C. Lin, Y.S. Li, <b>Albert T. Wu</b>* (2018, Jan). Study of diffusion barrier for solder/n-Type Bi2Te3 and bonding strength for p- and n-type thermoelectric modules. Journal of Electronic Materials, 47(1), 148-154.',
			'B.C. Lin, C.S. Ku, H.Y. Lee, S. Chakroborty, <b>Albert T. Wu</b>* (2017, Dec). Analysis of arrayed nanocapacitor formed on nanorods by flow-rate interruption atomic layer deposition. Applied Surface Science, 426, 224-228.',
			'C.H. Chen, S. Chakroborty, B.H. Lee, H.C. Chen, C.M. Wang, <b>Albert T. Wu</b>* (2017, Dec). Assessment of microstructure and shear strength for low melting point tin-free alloys on Cu. Materials Science and Engineering: A, 708, 142-148.',
			'H.C. Hsieh, C.H. Wang, W.C. Lin, S. Chakroborty, T.H. Lee, H.S. Chu, <b>Albert T. Wu</b>* (2017, Dec). Electroless Co-P diffusion barrier for n-PbTe thermoelectric material. Journal of Alloys and Compounds, 728, 1023-1029. ',
			'Y.T. Huang, C.H. Chen, S. Chakroborty, <b>Albert T. Wu</b>* (2017, Sep). Crystallographic orientation effect on electromigration in Ni-Sn microbump. JOM, 69(9) 1717-1723. ',
			'B.C. Lin, C.S. Ku, H.Y. Lee, <b>Albert T. Wu</b>* (2017, Aug). Epitaxial growth of ZnO nanorod arrays via a self-assembled microspheres lithography. Applied Surface Science, 414, 212-217. ',
			'P.C. Lin, H. Chen, H.C. Hsieh, <b>Albert T. Wu</b>* (2017, Feb). Effect of phase separation on mechanical strength of co-sputtering Cu(Ti) thin film in chip-level 3DIC bonding. Materials Letters, 189, 93-96. ',
			'Y.T. Huang,  C.H. Chen, B.H.  Lee, H.C.  Chen, C.M.  Wang, <b>Albert T. Wu</b>* (2016, Dec). In situ electromigration in Cu-Sn and Ni-Sn critical solder length for three-dimensional integrated circuits. Journal of Electronic Materials, 45(12), 6163-6170. ',
			'Y.T. Ouyang, H.C. Hsieh, P.C. Lin, T.H. Tseng, C.S. Ku, H.Y. Lee, <b>Albert T. Wu</b>* (2016, Aug). Si1-xGex photodiode with segregated Ge nanocrystals. Materials Letters, 184, 308-311. ',
			'H. Chen, Y.L. Tsai, Y.T. Chang, <b>Albert T. Wu</b>* (2016, Jun). Effect of massive spalling on mechanical strength of solder joints in Pb-free solder reflowed on Co-based surface finishes. Journal of Alloys and Compounds, 671, 100-108. ',
			'H. Chen, H.Y. Lee, C.S. Ku, <b>Albert T. Wu</b>* (2016, Apr). Evolution of residual stress and qualitative analysis of Sn whiskers with various microstructures. Journal of Materials Science, 51(7), 3600-3606. ',
			'H.C. Huang*, K.L. Lin, <b>Albert T. Wu</b> (2016, Mar). Disruption of crystalline structure of Sn3.5Ag induced by electric current. Journal of Applied Physics, 119(11), 115102. ',
			'C.H. Chen, B.H. Lee, H.C. Chen, C.M. Wang, <b>Albert T. Wu</b> * (2016, Jan). Interfacial reactions of low-melting Sn-Bi-Ga solder alloy on Cu substrate. Journal of Electronic Materials, 45(1), 197-202. ',
			'Y.H. Liao, C.L. Liang, K.L. Lin*, <b>Albert T. Wu</b> (2015, Dec). High dislocation density of tin induced by electric current. AIP Advances, 5, 127210. ',
			'H.H. Hsu, Y.T. Huang, S.Y. Huang, T.C. Chang, <b>Albert T. Wu</b>* (2015, Jul). Evolution of the intermetallic compounds in Ni/Sn-2.5Ag/Ni microbumps for three-dimensional integrated circuits. Journal of Electronic Materials, 44(10), 3888-3895. ',
			'Y.T. Ouyang, C.H. Su, J.Y. Chang, S.L. Cheng, P.C. Lin, <b>Albert T. Wu</b>* (2015, May). Metastable Ge nanocrystalline in SiGe matrix for photodiode. Applied Surface Science, 349, 387-392. ',
			'J.Y. He, K.L. Lin*, <b>Albert T. Wu</b> (2015, Jan). The diminishing of crystal structure of Sn9Zn alloy due to electrical current stressing. Journal of Alloys and Compounds, 619, 372-377. ',
			'C.H. Su, H. Chen, H.Y. Lee, C.Y. Liu, C.S. Ku, <b>Albert T. Wu</b>* (2014, Sep). Kinetic analysis of spontaneous whisker growth on pre-treated surfaces with weak oxide. Journal of Electronic Materials, 43(9), 3290-3295. ',
			'C.Y. Liu*, Y.C. Hsu, Y.J. Hu, T.S. Huang, C.T. Lu, <b>Albert T. Wu</b> (2014, Jan). Back-fill Sn flux against current-stressing at cathode micro Cu/Sn interface. Journal of the Electrochemical Society, 3(2), 17-19. ',
			'H.H. Hsu, T.C. Chiu, T.C. Chang, S.Y. Huang, H.Y. Lee,  C.S. Ku, Y.Y. Lin, C.H. Su, L.W. Chou, Y.T. Ouyang, Y.T. Huang, <b>Albert T. Wu</b>* (2014, Jan). Evaluation of strain measurement in a die-to-interposer chip using in situ synchrotron X-ray diffraction and finite-element analysis. Journal of Electronic Materials, 43(1), 52-56. ',
			'P.Y. Chien, C.H. Yeh, <b>Albert T. Wu</b>* (2014, Jan). Polarity effect in SAC305/bismuth telluride thermoelectric system. Journal of Electronic Materials, 43(1), 284-289. ',
			'Y.J. Hu, Y.C. Hsu, T.S. Huang, C.T. Lu, <b>Albert T. Wu</b>, C.Y. Liu* (2014, Jan). Effect of metal bond-pad configurations on the solder microstructure development of flip-chip solder joints. Journal of Electronic Materials, 43(1), 170-175. ',
			'Y.T. Huang, H.H. Hsu, <b>Albert T. Wu</b>* (2014, Jan). Electromigration-induced back stress in critical solder length for three-dimensional integrated circuits. Journal of Applied Physics, 115(3), 034904. ',
			'J.H. Hong, H.Y. Lee, <b>Albert T. Wu</b>* (2013, Dec). Massive spalling and morphological change of intermetallic compound affected by adding Pd in Co-based surface finishes. Journal of Alloys and Compounds, 580, 195-200. ',
			'L.W. Chou, Y.Y. Lin, <b>Albert T. Wu</b>* (2013, Jul). High surface textured SnO2 hybrid thin films fabricated using the nozzle-spraying process for solar cell applications. Applied Surface Science, 277, 30-34. ',
			'C.R. Kao*, <b>Albert T. Wu</b>, K.N. Tu, Y.S. Lai (2013, Jun). Reliability of micro-interconnects in 3D IC packages. Microelectonics Reliability, 53, 1-1. ',
			'Y.Y. Lin, H.Y. Lee, C.S. Ku, L.W. Chou, <b>Albert T. Wu</b>* (2013, Mar). Bandgap narrowing in high dopant tin oxide degenerate thin film produced by atmosphere pressure vapor deposition. Applied Physics Letter, 102(11), 111912. ',
			'W.Y. Chen, T.C. Chiu, K.L. Lin, <b>Albert T. Wu</b>, W.L. Jang, C.L. Dong, H.Y. Lee (2013, Feb). Anisotropic dissolution behavior of the second phase in SnCu solder alloys under current stress. Scripta Materialia, 68, 317-320. ',
			'Y.T. Chiu, K.L. Lin*, <b>Albert T. Wu</b>, W.L. Jang, C.L. Dong, Y.S. Laid (2013, Feb). Electrorecrystallization of metal alloy. Journal of Alloys and Compounds, 549, 190-194. ',
			'C.Y. Ko, <b>Albert T. Wu</b>* (2012, Dec). Evaluation of diffusion barrier between pure Sn and Te. Journal of Electronic Materials, 41(12), 3320-3324. ',
			'L.C. Lo, <b>Albert T. Wu</b>* (2012, Dec). Interfacial reactions between diffusion barriers and thermoelectric materials under current stressing. Journal of Electronic Materials, 41(12), 3325-3330. ',
			'Y.Y. Lin, <b>Albert T. Wu</b>*, C.S. Ku, H.Y. Lee (2012, Oct). Analysis of chlorine ions in antimony-doped tin oxide thin film using synchrotron grazing incidence X-ray diffraction. Japanese Journal of Applied Physics, 51(10), 10NE28. ',
			'C.N. Yeh, K.W. Yang, H.Y. Lee, <b>Albert T. Wu</b>* (2012, Jan). Elucidating the metal-induced crystallization and diffusion behavior of Al/a-Ge thin films. Journal of Electronic Materials, 41(1), 159-165. ',
			'C.Y. Tsai, B.Y. Lou, H.H. Hsu, <b>Albert T. Wu</b>* (2012, Jan). Current redistribution by intermetallic compounds in through-silicon-via (TSV). Materials Chemistry and Physics, 132(1), 162-165. ',
			'T.Y. Lin, C.N. Liao, <b>Albert T. Wu</b>* (2012, Jan). Evaluation of diffusion barrier between lead-free solder systems and thermoelectric materials. Journal of Electronic Materials, 41(1), 153-158. ',
			'H.H. Hsu, S.Y. Huang, T.C. Chang, <b>Albert T. Wu</b>* (2011, Dec). Nucleation and propagation of voids in microbumps for 3 dimensional integrated circuits. Applied Physics Letters, 99(25), 251913. ',
			'C.H. Su, H. Chen, H.Y. Lee, <b>Albert T. Wu</b>* (2011, Sep). Controlled positions and kinetic analysis of spontaneous tin whisker growth. Applied Physics Letters, 99(13), 131906. ',
			'C.H. Chen, S.Y. Li, A.S.T. Chiang*, <b>Albert T. Wu</b>, Y.S. Sun (2011, Jul). Scratch-resistant zeolite anti-reflective coating on glass for solar applications. Solar Energy Materials & Solars Cells, 95(7), 1694-1700. ',
			'J.O. Sun, K.N. Tu, <b>Albert T. Wu</b>, N. Tamura (2011, Jun). Preferred orlentation relationships with large misfit interfaces between Ni3Sn4 and Ni in reactive wetting of eutectic SnPd on Ni. Journal of Applied Physics, 109(12), 123513. ',
			'Y.Y. Chiang, R. Cheng, <b>Albert T. Wu</b>* (2010, Nov). Effects on undercooling and interfacial reactions with Cu substrates of adding Bi and In to Sn-3Ag solder. Journal of electronic materials, 39(11), 2397-2402. ',
			'<b>Albert T. Wu</b>*, C.N. Siao, C.S. Ku, H.Y. Lee (2010, Feb). In situ observation of stress evolution in pure tin strip under electromigration using synchrotron radiation x-ray. Journal of Materials Research, 25(2), 292-295. ',
			'<b>Albert T. Wu</b>*, K.H. Sun (2009, Dec). Determination of average failure time and microstructural analysis of Sn-Ag-Bi-In solder under electromigration. Journal of Electronic Materials, 38(12), 2780-2785. ',
			'<b>Albert T. Wu</b>*, C.Y. Tsai, C.L. Kao, M.K. Shih, Y.S. Lai, H.Y. Lee, C.S. Ku (2009, Nov). In situ measurements of thermal and electrical effects of strain in flip-chip silicon dies using synchrotron radiation X-rays. Journal of Electronic Materials, 38(11), 2308-2313. ',
			'<b>Albert T. Wu</b>*, M.H. Chen, C.H. Huang (2009, May). Formation of intermetallic compounds in SnAgBiIn solder systems on Cu substrates. Journal of Alloys and Compounds, 476(1-2), 436-440. ',
			'<b>Albert T. Wu</b>*, Y.C. Ding (2009, Mar). The suppression of tin whisker growth by the coating of tin oxide nano particles and surface treatment. Microelectronics Reliability, 49(3), 318-322. ',
			'<b>Albert T. Wu</b>*, M.H. Chen, C.N. Siao (2009, Feb). The effect of solid state aging on the intermetallic compounds of Sn-Ag-Bi-In solders on Cu substrates. Journal of Electronic Materials, 38(2), 252-256. ',
			'<b>Albert T. Wu</b>*, Y.C. Hsieh (2008, Mar). Direct observation and kinetic analysis of grain rotation in anisotropic tin under electromigration. Applied Physics Letters, 92(12), 121921. ',
			'W.H. Lin, <b>Albert T. Wu</b>, S.Z. Lin, T.H. Chuang, K.N. Tu (2007, Jul). Electromigration in the flip chip solder joint of Sn-8Zn-3Bi on copper pads. Journal of Electronic Materials, 36(7), 753-759. ',
			'<b>Albert T. Wu</b>*, F. Hua (2007, Mar). Interfacial stability of eutectic SnPb solder and composite 60Pb40Sn solder on Cu/Ni(V)/Ti under bump metallization. Journal of Materials Research, Volume: 22 Issue: 3 Pages: 735-741. ',
			'K.N.Tu*, C. Chen, <b>Albert T. Wu</b> (2007, Mar). Stress analysis of spontaneous Sn whisker growth. Journal of Materials Science: Materials in Electronics, 18(1-3), 269-281. ',
			'K.N. Tu*, J.O. Suh, <b>Albert T. Wu</b>, N. Tamura, C.H. Tung (2005, Nov). Mechanism and prevention of spontaneous tin whisker growth. Materials Transactions, 46(11), 2300-2308. ',
			'<b>Albert T. Wu</b>, A.M. Gusak, K.N. Tu, C.R. Kao (2005, Jun). Electromigration induced grain rotation in anisotropic conducting beta-tin. Applied Physics Letters, 86, 241902. ',
			'<b>Albert T. Wu</b>*, K.N. Tu, J.R. Lloyd, N. Tamura, B.C. Valek, C.R. Kao (2005, Jan). Microstructure evolution of tin under electromigration studied by synchrotron x-ray micro-diffraction. TMS Letters, 1(8), 165-166. ',
			'<b>Albert T. Wu</b>, K.N. Tu, J.R. Lloyd, N. Tamura, B.C. Valek, C.R. Kao (2004, Sep). Electromigration-induced microstructure evolution in tin studied by synchrotron X-ray microdiffraction. Applied Physics Letters, 85, 2490.');
	
		echo '<p style="text-align: left; margin: 0px 200px 0px 300px; font-size: 22px; line-height: 30px;">';
		for ($i=0; $i<count($paper); $i++) {	
			echo ($i+1).'. '.$paper[$i].'</br></br>';
		} 
	?>
</div>